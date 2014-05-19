<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/index.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/clip.css"  />
<title></title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
</head>

<body>
<div data-role="page" id="pageone">

  	<div data-role="header" id="header-lotto" >
    	<h1>Lotto 474055501</h1>
  	</div>
  
   	<div data-role="content">
    	<div id="contenner-lotto">
        	<div id="frame-lotto">
            	<div class="txt-sign-header">
                	<div class="notice"></div><div id="test"></div><div style="margin-left:20px; padding-top:2px;">ยืนยันสมัครใช้บริการ</div>  
               	</div>
            </div>
            
            <div id="frame-detail-lotto">
            <?php if($price == 0):?>
            	<div class="txt-message-lotto">บริการเลขมงคล 4740555</div>
                <div class="txt-message-lotto">มีค่าบริการ 5 บาทต่อข้อความ</div>
                <div class="txt-message-lotto">โดยท่านจะได้รับ SMS ไปจนกว่าจะขอยกเลิกบริการ </div>
                <div class="txt-message-lotto">เมื่อท่านสมัครบริการนี้ท่านได้อ่านและยอมรับเงื่อนไข</div>
                <div class="txt-message-lotto">และค่าบริการแล้ว หากต้องการยกเลิกบริการกด และค่าบริการ </div>
                <div class="txt-message-lotto">หากต้องการยกเลิกบริการกด *474099998</div>
                <div class="txt-message-lotto">แล้วโทรออก สอบถาม 029385919</div>
                <div class="txt-message-lotto" style=" margin-bottom:20px;"> เวลา 9:30 ถึง 17:30 (จันทร์ - ศุกร์)</div>
           <?php else:?>
           		<div class="txt-message">คุณทำรายการไม่ถูกต้อง</div>     
		   <?php endif; ?>
                <hr style="width:90%; color:#d1d0d0; margin-top:35px;" />
                
                
             <div style="margin-top:30px; margin-bottom:30px;">
            	<table align="center" style="width:80%;" > 
        			<tbody>
            			<tr>
                        <?php if($price == 0):?>
                		   	<td><a href="<?=$iPhoneurl;?>" data-role="button" data-mini="true" id="buttom1-lotto">สมัคร</a></td>
                        <?php else: ?>  
                        	<td><a href="<?php echo site_url('index/');?>" data-role="button" data-mini="true" id="buttom1">refresh</a></td>
                        <?php endif; ?>
                		</tr>
                	<tbody>  
            	</table>
            </div>   
            </div>
            <div style="text-align:center;">
            	<a href="<?php echo site_url('index/');?>">
                    <img src="<?php echo base_url();?>asset/img/Banner/sexy clip/mobile-leaderboard-(320x50).jpg" class="banner" />
                </a>
            </div>
        </div>
	</div>
</div>
</body>
</html>
