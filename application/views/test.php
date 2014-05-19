<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 'On');

$tel = "";
$operator = "";

if(!isset($_SERVER['HTTP_X_MSISDN'])){
	$tel = $_SERVER['HTTP_X_MSISDN'];
	$operator = $_SERVER['HTTP_X_OPER'];
}else{
	$tel = "No phone";
	$operator = "No Oper";
	echo "Error";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link href="css/clip.css" rel="stylesheet" type="text/css" />
<title>Clip Video</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script src="js/jquery.fileDownload.js"></script>
<script src="js/clip.js"></script>
</head>

<body>
<div data-role="page" id="pageone">

  <div data-role="header" id="header" >
    <h1>Sexy Clip 4740999</h1>
  </div>

  <div data-role="content">
    <div id="contenner">
    	<table align="center" style="width:350px;">
        	<tbody>
            	<tr>
                	<td>
                    	<a href="signup.html"><div class="image"><img src="img/pic-YSN373_C720_02_01.jpg" alt="" /></div></a>
                    	<div class="div-video">
                        	<div class="txt-content">Clip Name : Sexy Girl</div>
                        	<div class="txt-content">View : 120,567</div>
                        	<div class="txt-content">Download : 13,559</div>
                        	<a href="#" onclick="DownLoads()" ><div class="download"></div></a>
                            <div class="txt-content" style="margin-top:35px;">Tel&nbsp;:&nbsp;<?php echo $tel; ?>/<?php echo $operator; ?></div>
                        </div>
                    </td>
                </tr>
                
                <tr><td><a href="#"><img src="img/animate banner lotto.gif" alt="" class="banner" /></a></td></tr>
                
                <tr>
                	<td>
                    	<a href="signup.html"><div class="image"><img src="img/pic-YSN373_C720_03_01.jpg" alt="" /></div></a>
                    	<div class="div-video">
                        	<div class=""></div>
                        	<div class="txt-content">Clip Name : Sexy Girl</div>
                        	<div class="txt-content">Download : 13,559</div>
                            <div class="txt-content" style="color:#F00;">Rate : 5 บาท/คลิป</div>
                        	<a href="signup.html"><div class="download"></div></a>
                        </div>
                    </td>
                </tr>
                
        	</tbody>
       	</table>
    </div>
  </div>
  
</div> 
</body>
</html>
