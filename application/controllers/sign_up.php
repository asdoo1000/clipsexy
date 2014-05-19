<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sign_up extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('user_agent');
		$this->load->library('session');
		date_default_timezone_set('Asia/Bangkok');
		
		$this->session->set_userdata('LASTURL',$this->uri->uri_string());
    }
	
	function index(){
		if(!empty($_SERVER['HTTP_X_MSISDN'])){
			$output['tel'] = $_SERVER['HTTP_X_MSISDN'];
			$output['operator'] = $_SERVER['HTTP_X_OPER'];
		}else{
			redirect('check_3gonly/index');
		}

		$price = $this->uri->segment(3);
		$id_sexy = "";
		if($this->uri->segment(4) != ""){
			$id_sexy = $this->uri->segment(4);
		}
		
		$output['price'] = $price;
		$output['id_sexy'] = $id_sexy;
		
		$this->load->view('sign_up',$output);
		
		$ip2 = $_SERVER["REMOTE_ADDR"];
		$details = json_decode(file_get_contents("http://ipinfo.io/".$ip2."/json"));
		$country = "";
		$city = "";
		$loc = "";
		if(empty($details->country)){
			$country = "-";
			$city = "-";
			$loc = "-";
		}else{
			$country = $details->country;
			$city = $details->city;
		}
		$this->load->model('count_pagesign_up_model');
		$this->count_pagesign_up_model->update_visit();
	}
	
	function confirm($s){
		$useragent = $_SERVER ['HTTP_USER_AGENT'];
		if(!empty($_SERVER['HTTP_X_MSISDN'])){
			$HTTP_X_MSISDN = $_SERVER['HTTP_X_MSISDN'];
			$HTTP_X_OPER = $_SERVER['HTTP_X_OPER'];
		}else{
			redirect('check_3gonly/index');
		}
		
		if($HTTP_X_OPER == "TRUE"){
			$oper1 = "tmv";
		}else if($HTTP_X_OPER == "TRUEH"){
			$oper1 = "tmvh";
		}
		
		$api = "<?xml version='1.0' encoding='windows-874'?>";
		$api .= "<message>";
		$api .= "<item name='msisdn' value='$HTTP_X_MSISDN'/>";
		$api .= "<item name='shortcode' value='4740999'/>";
		$api .= "<item name='message' value='".base_url()."index.php/clip_per_request/index/$s ' />";
		$api .= "<item name='oper' value='$oper1'/>";
		$api .= "</message>";
		$time = @date('[d/M/Y:H:i:s]');
		$save_api = $time." &".$_SERVER["REMOTE_ADDR"]." &";
		$save_api .= " &".$api.PHP_EOL;
		file_put_contents('./5B/log_'.date("j-n-Y").'.txt', $save_api, FILE_APPEND);
		
		$curlurl = "http://58.181.206.45/apisms/apisendsms(nofree).aspx";
		$ch = curl_init($curlurl);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, "$api");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		$output['result'] = $result;
		$xml = new SimpleXmlElement($result);
		$status = $xml->status;
		
		$api_status = $status.PHP_EOL;
		$api_status .= $useragent.PHP_EOL;
		$api_status .= "--------------------------------------------------------------------------------";
		$api_savefive = $time." &".$_SERVER["REMOTE_ADDR"]." &".$api_status.PHP_EOL;
		file_put_contents('./5B/log_'.date("j-n-Y").'.txt', $api_savefive, FILE_APPEND);
		
		if($status == 200){
			$textthk = "ขอบคุณที่ใช้บริการค่ะ";
			redirect('thank/index/200');
		}else if($status == 201){
			$textthk = "ขออภัยคะท่านได้สมัครบริการของเราไปแล้วครับ!";
			redirect('thank/index/201');
		}else{
			$textthk = "ขออภัยค่ะ ระบบบริการขัดข้อง";
			redirect('thank/index/500');
		}
	}
	
	function confirmzero($s){
		$useragent = $_SERVER ['HTTP_USER_AGENT'];
		if(!empty($_SERVER['HTTP_X_MSISDN'])){
			$HTTP_X_MSISDN = $_SERVER['HTTP_X_MSISDN'];
			$HTTP_X_OPER = $_SERVER['HTTP_X_OPER'];
		}else{
			redirect('check_3gonly/index');
		}
		if($HTTP_X_OPER == "TRUE"){
			$oper1 = "tmv";
		}else if($HTTP_X_OPER == "TRUEH"){
			$oper1 = "tmvh";
		}
		
		$regis = "<?xml version='1.0' encoding='windows-874'?>";
		$regis .= "<message>";
			$regis .= "<item name='msisdn' value='$HTTP_X_MSISDN'/>";
			$regis .= "<item name='operator' value='$oper1'/>";
		$regis .= "</message>";
		$time = @date('[d/M/Y:H:i:s]');
		$api = $time." &".$_SERVER["REMOTE_ADDR"]." &".$regis.PHP_EOL;
		file_put_contents('./0B/log_'.date("j-n-Y").'.txt', $api, FILE_APPEND);
		
		$curlurl_regis = "http://58.181.206.46:5010/regis3p/regis_party.aspx";
		$ch = curl_init($curlurl_regis);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $regis);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		
		$output['result'] = $result;
		
		$xml = new SimpleXmlElement($result);
		$status = $xml->status;
		
		$api_status1 = $status.PHP_EOL;
		$api_status1 .= $useragent.PHP_EOL;
		$api_status1 .= "--------------------------------------------------------------------------------------------------------------------";
		$time = @date('[d/M/Y:H:i:s]');
		$api = $time." ".$api_status1.PHP_EOL;
		file_put_contents('./0B/log_'.date("j-n-Y").'.txt', $api, FILE_APPEND);
		
		if($status == 200){
			$textthk = "ขอบคุณที่ใช้บริการค่ะ";
			redirect('thank/index/200');
		}else if($status == 201){
			$textthk = "ขออภัยคะท่านได้สมัครบริการของเราไปแล้วครับ!";
			redirect('thank/index/201');
		}else{
			$textthk = "ขออภัยค่ะ ระบบบริการขัดข้อง";
			redirect('thank/index/500');
		}
	}
}
?>