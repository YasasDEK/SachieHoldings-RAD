<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_regmodel extends CI_Model{
	public function getBlog(){
		$this->db->order_by('empNIC', 'desc');
		$query = $this->db->get('employee');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit($data){
		
		$this->db->insert('employee', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}

?>