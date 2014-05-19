<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Thank extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('curl');
    }
	function index($check_status){
		
		if($check_status == 200){
			$output['textthk'] = "ขอบคุณที่ใช้บริการ";
		}else if($check_status == 201){
			$output['textthk'] = "ขออภัยคะท่านได้สมัครบริการของเราไปแล้วครับ!";	
		}else{
			$output['textthk'] = "ขออภัยค่ะ ระบบบริการขัดข้อง";	
		}
		
		$this->load->view('thank',$output);
	}
}
?>