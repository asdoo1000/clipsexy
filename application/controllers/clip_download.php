<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clip_download extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('curl');
		$this->load->library('session');
		$this->session->set_userdata('LASTURL',$this->uri->uri_string());
    }
	
	function sexy(){
		$url = $this->uri->segment(3);
		$this->log_file(100);
		
		if(!empty($_SERVER['HTTP_X_MSISDN'])){
			$msisdn = $_SERVER['HTTP_X_MSISDN'];
			$operator = $_SERVER['HTTP_X_OPER'];
			$params_check['msisdn'] = $msisdn;
		}else{
			redirect('check_3gonly/index');
		}
		
		$params_check['cat'] = 4;
		$params_check['msisdn'] = $msisdn;
		$curlurl = "http://58.181.206.45/checkmsisdnV1.1/test.aspx?cat=4&msisdn=$msisdn";
		$ch = $this->curl->create($curlurl);
		$this->curl->option(CURLOPT_RETURNTRANSFER, TRUE);
		$this->curl->option(CURLOPT_POSTFIELDS, $params_check);
		$check_tel = $this->curl->execute();
		$xml_check_tel = new SimpleXmlElement($check_tel);
		$check_db_msisdn = $xml_check_tel->status;
		
		if($check_db_msisdn == 200){
			$params['check_url'] = $url;
			$curlurl = base_url()."/back_end/download_all.php";
			$ch = $this->curl->create($curlurl);
			$this->curl->option(CURLOPT_RETURNTRANSFER, TRUE);
			$this->curl->option(CURLOPT_POSTFIELDS, $params);
			$result = $this->curl->execute();
			$xml = new SimpleXmlElement($result);
			if($xml->clip['status'] == 500){
				redirect('check_3gonly/index');
			}
			$output['dbrow'] = $result;
			$output['chackbanner'] = 0;
			
		}else{
			redirect('sign_up/index/0/');
		}
		$this->load->view('clip_download',$output);
	}
	
	function downloadfree($s){
		$this->log_file(200);
		$msisdn = "";
		$operator = "";
		if(!empty($_SERVER['HTTP_X_MSISDN'])){
			$msisdn = $_SERVER['HTTP_X_MSISDN'];
			$operator = $_SERVER['HTTP_X_OPER'];
		}else{
			redirect('check_3gonly/index');
		}
		
		$time = @date('Y-m-d H:i:s');
		$this->load->model('clip_download_models');
		$data  = $this->clip_download_models->select_download($s);
		foreach ($data as $key){ 
			$name_sexy = $key->actor_code;
			$folder = str_replace("-", "", $name_sexy);
			$sum_download = $key->sum_download;  
			$video_name = $key->video_name; 
			$filevideo = (explode(".",$video_name));
			$sum_download++;
			
			$data = array(
   				'id_sexy' => $s,
   				'name_sexy' => $name_sexy ,
   				'msisdn' => $msisdn,
				'operator' => $operator,
				'Download_date' => $time
			);
			$this->clip_download_models->insert_download($data);
			
			$clip_db = array(
   				'sum_download' => $sum_download,
			);
			$this->db->where('id_sexy', $s);
			$this->db->update('mobile_service.clip_detail', $clip_db); 
			
			$song_path = file_get_contents("asset/filevideo/$folder/".$filevideo[0].".mp4");
			$song_name = $filevideo[0].".mp4";
			force_download($song_name, $song_path);
		}
	}
	
	function log_file($check_log){
		$ip_REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
		$details = @json_decode(file_get_contents("http://ipinfo.io/".$ip_REMOTE_ADDR."/json"));
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
			$loc = $details->loc;
		}	
		$time = @date('[d/M/Y:H:i:s]');
		$save_ip = $_SERVER['REMOTE_ADDR']." Country :".$country." &city :".$city." &loc :".$loc;
		$save_ip .= $time." &".$_SERVER ['HTTP_USER_AGENT'].PHP_EOL;
		if($check_log == 100){
			file_put_contents('./log_page/log_clip_download/log_'.date("j-n-Y").'.txt', $save_ip, FILE_APPEND);
		}else{
			file_put_contents('./log_page/log_download_free/log_'.date("j-n-Y").'.txt', $save_ip, FILE_APPEND);
		}
	}
}
?>