<?php  
 class Emp_logmodel extends CI_Model{  

      function can_login($empNIC, $emPassword){  
           $this->db->where('empNIC', $empNIC);  
           $this->db->where('emPassword', $emPassword);  
           $query = $this->db->get('employee');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0){  
                return true;  
           }  
           else{  
                return false;       
           }  
      }

      public function getBlog($empNIC){
		$this->db->order_by('empNIC', 'desc');
		$query = $query = $this->db->get_where('employee', array('empNIC' => $empNIC));
		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}  
 }  