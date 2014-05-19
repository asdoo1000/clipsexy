<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	ini_set('display_errors', 'On');
	
	$tel = "";
	$operator = "";
	$id_sexy = "";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/index.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/clip.css"  />
<title>Sign Up</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
</head>

<body>
<div data-role="page" id="pageone">

  	<div data-role="header" id="header" >
    	<h1>Sexy Clip 4740999</h1>
  	</div>
  
   	<div data-role="content">
    	<div id="contenner">
        	<div id="frame">
            	<div class="txt-sign-header">
                	<div class="notice"></div><div id="test"></div><div style="margin-left:20px; padding-top:2px;">Information</div>
               	</div>
            </div>
            
            <div id="frame-detail" style="padding-top:5%;">
            	<div class="txt-message">เนื่องจากระบบของเรายัง</div>
                <div class="txt-message">ไม่รองรับ ios 7 ขึ้นไป หากต้องการ</div>
                <div class="txt-message">สมัครกด *474099901 และโทรออก</div>
                <div class="txt-message">มีค่าบริการ 5 บาทต่อข้อความ</div>
                <div class="txt-message">สอบถาม 029385919, </div>
                <div class="txt-message" style=" margin-bottom:20px;">เวลา 9:30 ถึง 17:30 (จันทร์ - ศุกร์)</div>
                <hr style="width:90%; color:#d1d0d0; margin-top:3%;" />
                
             <div style="margin-top:3%; margin-bottom:3%;">
            	<table align="center" style="width:80%;">
        			<tbody>
            			<tr>
                			<td><a href="sms:4740999?body=Reg CL" target="_blank" data-role="button" data-mini="true" id="buttom1">สมัคร</a></td>
                            
                		</tr>
                	<tbody>  
            	</table>
            </div>   
            </div>
            <div style="text-align:center;">
            	<a href="#"><img src="<?php echo base_url();?>asset/img/Banner/Lotto/mobile-leaderboard-(320x50).jpg" class="banner" /></a></div>   
        </div>
	</div>
</div>
</body>
</html>
<!--<button type="submit" data-role="button" data-mini="true" data-ajax="false" id="buttom1"></button>-->