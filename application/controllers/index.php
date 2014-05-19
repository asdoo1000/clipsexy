<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends CI_Controller{
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('curl');
    }
	
	function index(){
		$curlurl = "".base_url()."/back_end/get_to_index.php";
		$ch = $this->curl->create($curlurl);
		$this->curl->option(CURLOPT_RETURNTRANSFER, TRUE);
		$result = $this->curl->execute();
		$this->load->model('count_pagesign_up_model');
		$this->count_pagesign_up_model->update_visit();
		
		$output['dbrow'] = $result;
		
		//$this->load->view('index',$output);
	}
}
?>