<?php
	$textthk = "";
	
	if(!empty($_REQUEST['id_sexy'])){	
		$id_sexy = "1";	
		$id_sexy = $_REQUEST['id_sexy'];
		$textthk = "ขอบคุณที่ใช้บริการ";
		header("Refresh: 3; url=http://".$_SERVER['HTTP_HOST']."/clipvideo/clip_download.php?id_sexy=$id_sexy");
	}else{
		$textthk = "ขออภัย กำลังแก้ไขระบบอยู่ ณ ขณะนี้";
		header("Refresh: 3; url=http://".$_SERVER['HTTP_HOST']."/clipvideo/clip_download.php?id_sexy=$id_sexy");
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link rel="stylesheet" href="css/clip.css" />
<title>Sign Up</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
</head>

<body>
<div data-role="page" id="pageone">

  	<div data-role="header" id="header" >
    	<h1>Sexy Clip 474099901</h1>
  	</div>
  
   	<div data-role="content">
    	<div id="contenner">
            <div id="frame-detail" style=" padding-top:12em; padding-bottom:12em;">
            	<div class="txt-message"><?=$textthk?></div>
            </div>
            <div style="text-align:center;"><a href="#" ><img src="img/Banner/Lotto/mobile-leaderboard-(320x50).jpg" alt="" class="banner" /></a></div>
            
        </div>
	</div>
</div>
</body>
</html>