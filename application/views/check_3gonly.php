<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/index.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/clip.css" />
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
        	<div id="frame">
            	<div class="txt-sign-header">
                	<div class="notice"></div><div style="margin-left:20px;">ดาวน์โหลดได้เฉพาะ 3G (3G Only)</div>
               	</div>
            </div>
            <div id="frame-detail">
            	<div class="txt-message">คลิปวีดีโอนี้ดาวน์โหลดได้เฉพาะ </div>
                <div class="txt-message"><font color="#4100FC" style="font-weight:bold;">3G Network</font> เท่านั้น หากต้องการ</div>
                <div class="txt-message">ดาวน์โหลดคลิปวีดีโอนี้ กรุณาปิด</div>
                <div class="txt-message">Wi-Fi ในมือถือของท่าน และกดปุ่ม</div>
                <div class="txt-message">รีเฟรซ (Refresh) อีกครั้ง</div>
                <div class="txt-message">ขอบคุณค่ะ</div>
                <hr style="width:90%; margin-top:10%; color:#d1d0d0;" />
                
             <div style="margin-top:10%; margin-bottom:15%;">
            	<table align="center" style="width:80%;">
        			<tbody>
            			<tr>
                			<td><a href="<?php echo site_url($this->session->userdata('LASTURL'));?>" data-role="button" data-mini="true" style="background:#e85c41; border-color:#e85c41; color:#FFF; text-shadow:0 0px;">Refresh</a></td>
                            
                		</tr>
                	<tbody>  
            	</table>
            </div>  
             
            </div>
            <div style="text-align:center;">
            	<a href="#"><img src="<?php echo base_url();?>asset/img/animate banner lotto.gif" alt="" class="banner" /></a></div>
        </div>
	</div>
</div>
</body>
</html>
