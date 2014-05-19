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
<div data-role="page" id="pageone1">

  	<div data-role="header" id="header" >
    	<h1>Sexy Clip 4740999</h1>
  	</div>
  
   	<div data-role="content">
    	<div id="contenner">
        	<div id="frame">
            	<div class="txt-sign-header">
                    <?php if($price == 5): ?>
                    	<div class="notice"></div><div id="test"></div><div style="margin-left:20px; padding-top:2px;">ยืนยันการรับ Content Per Request</div>
                    <?php else:?>
                		<div class="notice"></div><div id="test"></div><div style="margin-left:20px; padding-top:2px;">ยืนยันสมัครใช้บริการ</div>   
                    <?php endif; ?> 
               	</div>
            </div>
            
            <div id="frame-detail">
            <?php if($price == 0):?>
            	<div class="txt-message">บริการวีดีโอคลิป 4740999 มีค่าบริการ 5 บาท</div>
                <div class="txt-message">ต่อข้อความ (ไม่รวมภาษีมูลค่าเพิ่ม 7% และ</div>
                <div class="txt-message">ค่าใช้งาน 3G/GPRS) </div>
                <div class="txt-message"><font style="font-weight:bold;color:#a33f40;">ดาวน์โหลดได้เฉพาะระบบ Android</font></div>
                <div class="txt-message">เหมาะสำหรับผู้ที่มีอายุ 18 ปีขึ้นไป และจะต้องได้รับ</div>
                <div class="txt-message">ความยินยอมจาก ผู้ที่จ่ายค่าบริการ</div>
                <div class="txt-message">โดยท่านจะได้รับ SMS ไปจนกว่าจะ</div>
                <div class="txt-message">ขอยกเลิกบริการ เมื่อท่านสมัครบริการนี้</div>
                <div class="txt-message">ท่านได้อ่าน และยอมรับเงื่อนไขค่าบริการ</div>
                <div class="txt-message">แล้วหากต้องการยกเลิกบริการกด *474099998</div>
                <div class="txt-message"> แล้วโทรออกสอบถาม 029385919 ,</div>
                <div class="txt-message" style=" margin-bottom:20px;"> เวลา 9:30 ถึง 17:30 (จันทร์ - ศุกร์)</div>
           <?php elseif($price == 5): ?>
               	<div class="txt-message">บริการวีดีโอคลิป 4740999 </div>
                <div class="txt-message">มีค่าบริการ 5 บาทต่อข้อความ</div>
                <div class="txt-message">(ไม่รวมภาษีมูลค่าเพิ่ม 7% </div>
                <div class="txt-message">และ ค่าใช้งาน 3G/GPRS)</div>
                <div class="txt-message">เหมาะสำหรับผู้ที่มีอายุ 18 ปีขึ้นไป</div>
                <div class="txt-message">และจะต้องได้รับความยินยอมจาก</div>
                <div class="txt-message">ผู้ที่จ่ายค่าบริการ โดยท่านจะได้รับ</div>
                <div class="txt-message">โดยท่านจะได้รับ SMS เป็น Link URL</div>
                <div class="txt-message">เมื่อท่านสมัครบริการนี้ท่านได้อ่าน</div>
                <div class="txt-message">และยอมรับเงื่อนไขค่าบริการแล้ว </div>
                <div class="txt-message">สอบถาม 02-938-5919 ,</div>
                <div class="txt-message">เวลา 9:30 ถึง 17:30 (จันทร์ - ศุกร์)</div>
           <?php else:?>
           		<div class="txt-message">คุณทำรายการไม่ถูกต้อง</div>     
		   <?php endif; ?>
                <hr class="hr-bottom" />
                
                
             <div style="margin-top:0px; margin-bottom:0px;">
            
            	<table style="width:100%;" > 
        			<tbody>
            			<tr>
                        	<td class="tr-img">
                            <?php if($price == 0):?>
                            	<a href="<?php echo site_url('sign_up/confirmzero/').'/0'; ?>" ><img src="<?php echo base_url();?>asset/img/register03.png" id="img-confirmzero" /></a>
                           	<?php elseif($price == 5):?>
                            	<a href="<?php echo site_url('sign_up/confirm/').'/'.$id_sexy; ?>" ><img src="<?php echo base_url();?>asset/img/register03.png" id="img-confirmzero" /></a>
                            <?php endif; ?>
                            </td>
                        <?php if($price == 0):?>
                		   	<td>
                            	<a href="<?php echo site_url('sign_up/confirmzero/').'/0'; ?>" data-role="button" data-mini="true" id="buttom1">สมัครเลย :)</a>
                            </td>
                       	<?php elseif($price == 5):?>
                           	<td>
                            <a href="<?php echo site_url('sign_up/confirm/').'/'.$id_sexy; ?>" data-role="button" data-mini="true" id="buttom1">สมัครเลย :)</a>
                            </td>
                        <?php else: ?>  
                        	<td><a href="<?php echo site_url('index/');?>" data-role="button" data-mini="true" id="buttom1">refresh</a></td>
                        <?php endif; ?>
                		</tr>
                	<tbody>  
            	</table>
            </div>   
            </div>
            <div style="text-align:center;">
            	<a href="<?php echo site_url('sign_up_lotto/index/');?>">
            		<img src="<?php echo base_url();?>asset/img/Banner/Lotto/mobile-leaderboard-(320x50).jpg" class="banner" />
                </a>
            </div>
        </div>
	</div>
</div>
</body>
</html>
