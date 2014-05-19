<?php
	$xml = new SimpleXmlElement($dbrow);
	
	$id_sexy = $xml->clip_per->id_sexy;
	$name_sexy = $xml->clip_per->name_sexy;
	$img = $xml->clip_per->img_name;
	$price = $xml->clip_per->price;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/clip.css" />
<title>Download</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.simpleGal.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.backstretch.min.js"></script>
<script src="<?php echo base_url();?>asset/js/clip.js"></script>
</head>

<body>
<div data-role="page" id="pageone">

  	<div data-role="header" id="header" >
    	<h1>Sexy Clip 474099901</h1>
  	</div>
  
   	<div data-role="content" style="padding:0.5em;">
    	<div id="contenner">
        
        	<div style="width:100%; margin:0 auto; ">
                <div style="text-align:center;">
                	<a href="#" onclick="newtap()" data-ajax="false">
   	 					<img src="<?php echo base_url();?>asset/img/image_sexy/<?=$img;?>" style="width:255px;" alt="Placeholder" class="custom">
                    </a>
  				</div>
            	<div class="txt-check3g"><font color="#393939">Clip Name :</font><font color="#a33f40"> <?=$name_sexy;?></font></div>	
            	<ul class="thumbnails">
                		  <?php for($j=1; $j<=5; $j++){	?>
                                	<li><a href="<?php echo base_url();?>asset/img/Thumbnails_per/00<?=$j;?>.jpg" style="color:rgba(252, 252, 252, 0);">
                    					<img src="<?php echo base_url();?>asset/img/Thumbnails_per/00<?=$j;?>.jpg" width="45px" alt="Thumbnails">
                       	 			</a></li>
                		  <?php } ?>
  								</ul>
           	</div>
            
            <div style=" margin-bottom:140px;">
            	<table align="center" style="width:50%;">
        			<tbody>
            			<tr><input type="hidden" value="<?=$url?>" id="url"/>
                			<td><a href="#" onclick="newtap()" data-ajax="false" data-role="button" data-mini="true" id="buttom1">Click Here</a></td> 
                		</tr>
                	<tbody>  
            	</table>
            </div>	
         	<div style="text-align:center; width:100%;">
         		<a href="<?php echo site_url('sign_up_lotto/index/');?>">
                	<img src="<?php echo base_url();?>asset/img/Banner/Lotto/large-mobile-banner-(320x100).jpg" class="banner" />
               	</a>
        	</div>  	
        </div>
	</div>
</div>
</body>
</html>