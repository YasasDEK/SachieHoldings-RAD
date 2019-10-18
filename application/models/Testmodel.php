<?php  
 class Testmodel extends CI_Model{  

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

 }

 ?>

