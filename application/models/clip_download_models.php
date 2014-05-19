<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clip_download_models extends CI_Model {
	function clip_download_models()
    {
    	parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Bangkok');
    }
	function select_download($s){
		$this->db->select("actor_code,sum_download,video_name");
        $this->db->from("clip_detail");
		$this->db->where('id_sexy', $s);
		$query = $this->db->get();
		
		return $query->result();
	}
	function insert_download($data_insert){
		$this->db->insert('mobile_service.clip_download', $data_insert); 
	}
}
?>