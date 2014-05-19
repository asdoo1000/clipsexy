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
<script language="javascript">
$(document).ready(function() {
function CloseWindowsInTime(t){
	t = t*1000;
	window.open('', '_self', '');
	setTimeout("window.close()",t);
}
CloseWindowsInTime(2); 
});

</script>
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
            <div style="text-align:center;">
            	<a href="<?php echo site_url('sign_up_lotto/index/');?>">
                	<img src="<?php echo base_url();?>asset/img/animate banner lotto.gif" alt="" class="banner" />
              	</a>
           	</div>
        </div>
	</div>
</div>
</body>
</html>
