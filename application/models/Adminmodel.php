<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model{

	public function getBlog(){
		$this->db->order_by('drvNIC', 'desc');
		$query = $this->db->get('driver');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit($field){
		$this->db->insert('driver', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getBlogBydrvNIC($drvNIC){
		$this->db->where('drvNIC', $drvNIC);
		$query = $this->db->get('driver');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update($drvNIC,$field){
		$this->db->where('drvNIC', $drvNIC);
		$this->db->update('driver', $field);
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($drvNIC){
		$this->db->where('drvNIC', $drvNIC);
		$this->db->delete('driver');
		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

}

?>