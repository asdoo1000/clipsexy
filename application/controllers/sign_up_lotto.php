<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sign_up_lotto extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('user_agent');
    }
	
	function index(){
		$price = 0;
		$output['price'] = $price;
		$output['iPhoneurl'] = "sms:4740555?body=Reg lt";
			
		$this->load->view('sign_up_lotto',$output);
	}
}
?>