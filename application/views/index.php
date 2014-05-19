<?php
	$tel = "";
	$operator = "";
	$Thumbnails = "";
	$id_sexy = "";
	$name_sexy = "";
	$photo = "";
	$sum_download = "";
	
	$xml = simplexml_load_string($dbrow);
	$total=count($xml->clip_sexy);
	$perPage = 10;
	$num_naviPage=ceil($total/$perPage);
	// กำหนดจุดเริ่มต้น และสิ้นสุดของรายการแต่ละหน้าที่จะแสดง 
	if(empty($_GET['page'])){
		$_GET['page']=1;
		$s_key=0;  
    	$e_key=$perPage; 
	}
	if(isset($_GET['page'])){ 
    	$s_key=($_GET['page']*$perPage)-$perPage;  
    	$e_key=$perPage*$_GET['page'];  
    	$e_key=($e_key>$total)?$total:$e_key;
	}   	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/clip.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/index.css" />

<title></title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.simpleGal.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.backstretch.min.js"></script>
<script src="<?php echo base_url();?>asset/js/clip.js"></script>
</head>

<body>
<div data-role="page" id="pageone">

  	<div data-role="header" id="header" >
    	<h1>Sexy Clip 4740999</h1>
  	</div>
  
   	<div data-role="main" id="content">
    	<div id="contenner">
        	<table align="center" width="100%">
            	<tbody>
                <tr>
                <?php
					$k=0;
            		for($indexFeed=$s_key;$indexFeed<$e_key;$indexFeed++){
						$id_sexy = $xml->clip_sexy[$indexFeed]->id_sexy;
						$photo = $xml->clip_sexy[$indexFeed]->img_name;
						$name_sexy = $xml->clip_sexy[$indexFeed]->name_sexy;
						$sum_download = $xml->clip_sexy[$indexFeed]->sum_download;
						$k++;
				?>
                	
                    	<td align="center">
                        	<div class="td1">
                				<div style="text-align:center;">
                                	<img src="<?php echo base_url();?>asset/img/Icon/clip-d.jpg" class="zzz" />
                                    <img src="<?php echo base_url();?>asset/img/image_sexy/<?=$photo;?>" style="width:150px; height:110px;" alt="<?=$photo;?>" class="custom">
  								</div>
                                <div class="txt-index"><font color="#393939">Clip Name :</font><font color="#a33f40"> <?=$name_sexy;?></font></div>	
            					<ul class="thumbnails">
                		  <?php for($j=1; $j<=5; $j++){	?>
                                	<li><a href="<?php echo base_url();?>asset/img/Thumbnails/00<?=$j;?>.jpg" style="color:rgba(252, 252, 252, 0);">
                    					<img src="<?php echo base_url();?>asset/img/Thumbnails/00<?=$j;?>.jpg" width="25px" alt="Thumbnails">
                       	 			</a></li>
                		  <?php } ?>
  								</ul>
                                <div class="txt-content" style="text-align:center;">ดาวน์โหลด :<?=$sum_download;?></div>
                                
                                <div style="width:70%;">
                                	<a href="<?php echo site_url('sign_up/index').'/0/'.$id_sexy;?>" data-role="button" data-mini="true" id="buttom1">Click Here</a>
                                </div>
                           	</div>
                        </td>
                <?php
						if(($k)%2==0){
							echo "</tr>";
						}
            		}
				?>
                </tbody>     
            </table>
            <div style="float:right; font-size:10px;">
            	<?php 
					for($i=1;$i<=$num_naviPage;$i++){  
    					if($i != $_GET['page']){
							echo "[<a href=?page=".$i.">$i</a>] ";
						}else{
							echo "[ <strong>".$i."</strong> ] ";
						}   
					} 
				?>
            </div>
        </div>
	</div>
</div>
</body>
</html>
