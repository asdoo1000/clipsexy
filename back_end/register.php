<?php
include("connectDB/connect105.php");
date_default_timezone_set('Asia/Bangkok');

$msidn = "";
$operator = "";
$date = "";

$msidn = $_REQUEST['msidn'];
$operator = $_REQUEST['operator'];
$date = @date("Y-m-d H:i:s");
$service_language = "th";
$channel_register = "SMS";

$strSQL = "INSERT INTO sms_sequence_user";
$strSQL .="(msisdn, operator, service_language, register_date, channel_register) ";
$strSQL .="VALUES";
$strSQL .="('".$msidn."','".$operator."','".$service_language."','".$date."','".$channel_register."') ";
$objQuery = mysqli_query($link,$strSQL)or die("Error: ".mysqli_error($link));

if($objQuery){
 	echo 1;
}else{
	echo "Error Save [".$objQuery."]";
}

?>