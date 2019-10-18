<?php  
 class Emp_showmodel extends CI_Model{  

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

      public function getdbByNic($empNIC){
          $this->db->where('empNIC',$empNIC);
          $query=$this->db->get('employee');

          if($query->num_rows()>0){
               return $query->row();
          }
          else{
               return false;
          }
     }

    
      public function update($id,$field){
          //$empNIC=$this->input->post('txt_hidden');
          //echo $_POST['txt_emPassword'];
          
         $this->db->where('empNIC',$id);
           $this->db->update('employee',$field);
           if($this->db->affected_rows()>0){
              return true;
         }
         else{
              return false;
         }
    }
 
    public function get_data($id){
         $query=$this->db->get_where('employee',array('empNIC'=>$id));
         return $query->row();
    }
    public function delete($empNIC){
         $this->db->query('UPDATE employee SET empStatus=0 WHERE empNIC="'.$empNIC.'"');
         
        if($this->db->affected_rows()>0){
              return true;
         }
         else{
              return false;
         }
 
    }  
 }  