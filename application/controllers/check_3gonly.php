<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Check_3gonly extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
    }
	
	function index(){
		$this->session->userdata('LASTURL');
		$this->load->view('check_3gonly');
	}
}
?>