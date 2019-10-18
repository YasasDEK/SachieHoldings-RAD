<?php  
 class Logmodel extends CI_Model{  

      function can_login($drvNIC, $drvPassword){  
           $this->db->where('drvNIC', $drvNIC);  
           $this->db->where('drvPassword', $drvPassword);  
           $query = $this->db->get('driver');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0){  
                return true;  
           }  
           else{  
                return false;       
           }  
      }

      public function getBlog($drvNIC){
		$this->db->order_by('drvNIC', 'desc');
		$query = $query = $this->db->get_where('driver', array('drvNIC' => $drvNIC));
		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}  
 }  