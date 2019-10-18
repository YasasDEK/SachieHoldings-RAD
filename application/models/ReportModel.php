<?php
class ReportModel extends CI_Model{
 
  //get data from database
  function get_data(){
	  $query = $this->db->query('SELECT MONTHNAME(resPick) as Month, COUNT(resID) as Monthly_ct FROM reservation GROUP BY Month');
      
      return $query;
  }
 
}