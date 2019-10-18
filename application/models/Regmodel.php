<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regmodel extends CI_Model{
	public function getBlog(){
		$this->db->order_by('drvNIC', 'desc');
		$query = $this->db->get('driver');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit($data){
		
		$this->db->insert('driver', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}

?>