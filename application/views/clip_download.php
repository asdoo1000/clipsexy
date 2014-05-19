<?php
	$xml = new SimpleXmlElement($dbrow);
	
	$id_sexy = $xml->clip_free->id_sexy;
	$name_sexy = $xml->clip_free->name_sexy;
	$img = $xml->clip_free->img_name;
	$sum_download = $xml->clip_free->sum_download;
	
	$url = base_url()."asset/back_end/videodownload.php?id_sexy=$id_sexy";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/index.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/clip.css"  />

<title>Clip Video</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.fileDownload.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.simpleGal.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.backstretch.min.js"></script>
<script src="<?php echo base_url();?>asset/js/clip.js"></script>
</head>

<body>
<div data-role="page" id="pageone">

  <div data-role="header" id="header" >
    <h1>Sexy Clip 4740999</h1>
  </div>

  <div data-role="content" id="content">
    <div id="contenner">
    	<table align="center" style="width:350px;">
        	<tbody>
          		<tr>
                	<td>
                    	<a href="#">
                        	<div class="image"><img src="<?php echo base_url();?>asset/img/image_sexy/<?=$img;?>" width="195px" /></div>
                       	</a>
                    	<div class="div-video">
                           	<div class="hot-clip"></div><br /><br />

                        	<div class="txt-content">ชื่อคลิป : <?=$name_sexy;?></div>
                        	<div class="txt-content">ดาวน์โหลด : <?=$sum_download;?></div>
                            
                            <div id="url" style="display:none;"><?=$url;?></div>    
                        	<a href="<?php echo site_url('clip_download/downloadfree').'/'.$id_sexy; ?>" target="_blank" >
                            	<div class="download-free-th"></div>
                            </a>
                            <div class="txt-content"></div>
                        </div>
                    </td>
               	 </tr>
           	<?php if ($chackbanner == 0): $chackbanner=1; ?>
				<tr><td><a href="<?php echo site_url('sign_up_lotto/index/') ?>">
                	<img src="<?php echo base_url();?>asset/img/animate banner lotto.gif" alt="" class="banner" /></a>
               	</td></tr>			
            <?php endif; ?>
           	
            <?php
            	for($i=0; $i<count($xml->clip_pre); $i++){
					$id_sexy = $xml->clip_pre[$i]->id_sexy;
					$name_sexy = $xml->clip_pre[$i]->name_sexy;
					$img = $xml->clip_pre[$i]->img_name;
					$sum_download = $xml->clip_pre[$i]->sum_download;
					$price = $xml->clip_pre[$i]->price;
?>
            		<tr>
                		<td>
                    		<a href="#">
                            	<div class="image"><img src="<?php echo base_url();?>asset/img/image_sexy/<?=$img;?>" width="195px" /></div>
                            </a>
                    		<div class="div-video">
                            	<div class="hot-clip"></div><br /><br />

                        		<div class="txt-content">ชื่อคลิป : <?=$name_sexy;?></div>
                        		<div class="txt-content">ดาวน์โหลด : <?=$sum_download;?></div>
                                <div class="txt-content" style="color:#F00;">ราคา : <?=$price;?> บาท/คลิป</div>
                                
                        		<a href="<?php echo site_url('sign_up/index').'/5/'.$id_sexy;?>"><div class="download-th"></div></a>
                            	<div class="txt-content"></div>
                        	</div>
                    	</td>
               	 	</tr>
           	<?php
            	}
			?>
        	</tbody>
       	</table>
    </div>
  </div>
</div> 
</body>
</html>
