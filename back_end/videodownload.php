<?PHP
include("connectDB/connect105.php");
date_default_timezone_set('Asia/Bangkok');
$time = @date('Y-m-d H:i:s');

$id_sexy = "";
$video_name = "";
$tel = "";
$operator = "";
$id_sexy = $_REQUEST['id_sexy'];
if(!empty($_SERVER['HTTP_X_MSISDN'])){
	$tel = $_SERVER['HTTP_X_MSISDN'];
	$operator = $_SERVER['HTTP_X_OPER'];
}else{
	header( 'Location: http://58.181.206.44/clipsexy/index.php/check_3gonly/index' ) ;
}

$sql=sprintf("SELECT video_name,actor_code FROM clip_detail WHERE id_sexy = ".$id_sexy."");
$result = mysqli_query($link,$sql)or die("Error: ".mysqli_error($link));

if($row = mysqli_fetch_array($result)){
	$video_name = $row['video_name'];
	$filevideo = (explode(".",$video_name));
	$actor_code = $row['actor_code'];
	$name1 =  str_replace("-","",$actor_code);
	
	$strSQL = "INSERT INTO clip_download";
	$strSQL .="(id_sexy, name_sexy, msisdn, operator, Download_date) ";
	$strSQL .="VALUES";
	$strSQL .="('".$id_sexy."','".$actor_code."','".$tel."','".$operator."','".$time."' ) ";
	$objQuery = mysqli_query($link,$strSQL)or die("Error: ".mysqli_error($link));
}

$song_path = "../asset/filevideo/$name1/".$filevideo[0].".mp4";
$song_name = $filevideo[0].".mp4";

if (file_exists($song_path)) { // ตรวจสอบก่อนว่าไฟล์มีอยู่จริงหรือเปล่า
	header('Content-Description: File Transfer');
    header("Content-Type: application/force-download");
//	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
	header("Content-Type: video/mp4");
	
    header('Content-Disposition: attachment; filename='.urldecode($song_name));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: '.filesize($song_path)); //
    ob_clean();
    flush();
    readfile($song_path); // และสั่งให้ดาวน์โหลดไฟล์
}else{
	echo "Not File";
}
?>