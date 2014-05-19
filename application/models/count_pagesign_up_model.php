<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Count_pagesign_up_model extends CI_Model {
	function count_pagesign_up_model(){
    	parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Bangkok');
    }
	function update_visit(){
		$phone = '';
		$country = '';
		$city = '';
		$loc = '';
		
		if(!empty($_SERVER['HTTP_X_MSISDN'])){ $phone = $_SERVER['HTTP_X_MSISDN']; }
		$ip2 = $_SERVER["REMOTE_ADDR"];
		$details = json_decode(file_get_contents("http://ipinfo.io/".$ip2."/json"));
		if(empty($details->country)){
			$country = "-";
			$city = "-";
			$loc = "-";
		}else{
			$country = $details->country;
			$city = $details->city;
			$loc = $details->loc;
		}
		$ip_sql = $_SERVER["REMOTE_ADDR"];
		$time = @date('Y-m-d H:i:s');
		$data = array(
   			'ip_address' => $ip_sql ,
   			'date_onclick' => $time ,
			'header_phone' => $_SERVER ['HTTP_USER_AGENT'] ,
			'phone' => $phone , 
   			'country' => $country , 
			'province' => $city , 
			'lat_log' => $loc 
		);
		$this->db->insert('save_onclick', $data); 
		$ip = $_SERVER['REMOTE_ADDR']." &Country ".$country." &city ".$city." &loc ".$loc;
		$time = @date('[d/M/Y:H:i:s]');
		$save_ip = $time." &".$ip." &".$_SERVER['HTTP_X_MSISDN']." &";
		$save_ip .= $_SERVER['HTTP_USER_AGENT'].PHP_EOL;
		file_put_contents('./save_ip/log_'.date("j-n-Y").'.txt', $save_ip, FILE_APPEND);
		
		$check_ip = 0;
		$query = $this->db->query("select date,ip_address from count_page_clipsexy");
		if ($query->num_rows() > 0){
   			$row = $query->row();
			$row->ip_address; 
			if($row->date != date("Y-m-d")){
				
				$strSQL = "INSERT INTO daily_today_clipsexy (date,summary)
								SELECT '".date('Y-m-d',strtotime("-1 day"))."', COUNT(*) AS intYesterday 
								FROM count_page_clipsexy WHERE date = '".date('Y-m-d',strtotime("-1 day"))."' ";
				$query = $this->db->query($strSQL);
				
				$deleteSQL = " DELETE FROM count_page_clipsexy WHERE date != '".date("Y-m-d")."' ";
				$this->db->query($deleteSQL);
			}
			
			foreach ($query->result() as $row1)
			{
				if($row1->ip_address == $_SERVER["REMOTE_ADDR"]){
					$check_ip++;
					
				}
			}
		}
		if($check_ip == 0){
			$ip = $_SERVER['REMOTE_ADDR']." Country :".$country." &city :".$city." &loc :".$loc;
			$time = @date('[d/M/Y:H:i:s]');
			$save_ip = $time." &".$ip." &".$_SERVER['HTTP_X_MSISDN']." &";
			$save_ip .= $_SERVER ['HTTP_USER_AGENT'].PHP_EOL;
			file_put_contents('./save_ip/log_noip_'.date("j-n-Y").'.txt', $save_ip, FILE_APPEND);
			
			$counter = array(
   				'date' => date("Y-m-d") ,
   				'ip_address' => $_SERVER["REMOTE_ADDR"]
			);
			$this->db->insert('count_page_clipsexy', $counter);
		}
	}
}
?>