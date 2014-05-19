<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clip_per_request extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('curl');
    }
	function index(){
		if(!empty($_SERVER['HTTP_X_MSISDN'])){
			$tel = $_SERVER['HTTP_X_MSISDN'];
			$operator = $_SERVER['HTTP_X_OPER'];
		}else{
			redirect('check_3gonly/index');
		}
		
		$id_sexy = $this->uri->segment(3);
		$url = base_url()."/back_end/videodownload.php?id_sexy=$id_sexy";
		
		$params['id_sexy'] = $id_sexy;
		$curlurl = base_url()."back_end/get_per_download.php";
		$ch = $this->curl->create($curlurl);
		$this->curl->option(CURLOPT_RETURNTRANSFER, TRUE);
		$this->curl->option(CURLOPT_POSTFIELDS, $params);
		$result = $this->curl->execute();
		$output['dbrow'] = $result;
		$output['url'] = $url;
		$this->load->view('clip_per_request',$output);
	}
}
?>