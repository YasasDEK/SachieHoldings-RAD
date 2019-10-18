<?php
Class TypeModel extends CI_Model{
	public function query(){
		$this->db->where('tyStatus',1);
		$query=$this->db->get('type');
		return $query->result();
	}
	public function TypeInsert($data){
			$this->table = 'type';
			$this->db->insert($this->table, $data);
		// $sql="INSERT INTO type(tyName,tyPassenger,tyDRate,tyWParcent,tyMPercent,tyDescription,tyPhoto,tyStatus) VALUES($data['$tyName'],$data['$tyPassenger'],$data['$tyDRate'],$data['$tyWParcent'],$data['$tyMpercent'],$data['$tyDescription'],$data['$tyPhoto'],1)";
        }
	public function Typedelete($tyID){
		$data=array(
			'tyStatus'=>0
		);
		$this->db->where('tyID', $tyID);
		$this->db->update('type', $data);
	}
	public function TypeupdateSelect($tyID){
		$this->db->where('tyID',$tyID);
		$query=$this->db->get('type');
		return $query->result();
	}
	public function Typeupdate($tyID,$data){
		$this->db->where('tyID', $tyID);
		$this->db->update('type', $data);
	}
	public function existingType($tyName){
		$status=1;
		$this->db->where('tyName', $tyName);
		$this->db->where('tyStatus',$status);
		$query=$this->db->get('type');

		//when an old customer exists remove them 
		$status=0;
		$this->db->where('tyName', $tyName);
		$this->db->where('tyStatus',$status);
		$query_two=$this->db->get('type');

		if($query->num_rows()>0){
				 return false;
			}else if($query_two->num_rows()>0){
				$this->db->where('tyName', $tyName);
				$this->db->delete('type');
				return true;
			}else{
				return true;
			}
		
	}
	
 
}
	

?>