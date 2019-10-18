<?php
	Class CustomerModel extends CI_Model{
		//constructor
		public function _construct(){
			parent::_construct;
		}

		//check whether there is an user on given NIC (when signup)
		function checkExistUser($custNIC){
			$status=1;
			$this->db->where('custNIC',$custNIC);
			$this->db->where('custStatus',$status);
			$query=$this->db->get('Customer');

			//when an old customer exists remove them 
			$status=0;
			$this->db->where('custNIC',$custNIC);
			$this->db->where('custStatus',$status);
			$query_two=$this->db->get('Customer');

			if($query->num_rows()>0){
				 return false;
			}else if($query_two->num_rows()>0){
				$this->db->where('custNIC',$custNIC);
				$this->db->delete('Customer');
				return true;
			}else{
				return true;
			}
		}

		//insert data to the database when a user signed up
		function insertData($custName,$custDOB,$custNIC,$custLicence,$custTelephone,$custAddress,$custEmail,$custPassword){

			$custStatus=1; //status become 1 when an activation happen
			$data=array(
				'custNIC'=>$custNIC,
				'custPassword'=>$custPassword,
				'custName'=>$custName,
				'custDOB'=>$custDOB,
				'custAddress'=>$custAddress,
				'custTelephone'=>$custTelephone,
				'custEmail'=>$custEmail,
				'custStatus'=>$custStatus,
				'custLicence'=>$custLicence
			);

			$this->db->insert('Customer',$data);
		}

		//check user existence on given NIC and password (when sign in)
		function checkData($custNIC,$custPassword){
			$status=1;
			$this->db->where('custNIC',$custNIC);
			$this->db->where('custStatus',$status);
			$this->db->where('custPassword',$custPassword);
			$query=$this->db->get('Customer');

			if($query->num_rows()>0){
				 return true;
			}else{
				return false;
			}
		}

		//retieve data from customer when a someone sign in
		function retrieveData($custNIC,$custPassword){
			$this->db->where('custNIC',$custNIC);
			$this->db->where('custPassword',$custPassword);
			$query=$this->db->get('Customer');
			

			return $query->result_array();

		}

		//update data when someone do alternation
		function updateData($custNIC,$custName,$custTelephone,$custAddress,$custEmail,$custDOB){
			$value=array('custName'=>$custName,'custEmail'=>$custEmail,'custAddress'=>$custAddress,'custTelephone'=>$custTelephone,'custDOB'=>$custDOB);
            $this->db->where('custNIC',$custNIC);
            $this->db->update('Customer',$value);
		}

		function insertImage($image_path,$custNIC){
			$value=array('custPhoto'=>$image_path);
			$this->db->where('custNIC',$custNIC);
			$this->db->update('Customer',$value);

			return true;
		}

		function updatePassword($custNIC,$custPassword){
			$value=array('custPassword'=>$custPassword);
			$this->db->where('custNIC',$custNIC);
            $this->db->update('Customer',$value);
		}

		function deleteData($custNIC){
			$custStatus=0;
			$value=array('custStatus'=>$custStatus);
			$this->db->where('custNIC',$custNIC);
			$this->db->update('Customer',$value);
		}

		//check the reservation page when some tries to rate driver
		function checkReservation($custNIC){
			$status=2;
			$this->db->where('custNIC',$custNIC);
			$this->db->where('resStatus',$status);
			$this->db->where('drvNIC !=','');

			$query=$this->db->get('reservation');

			if($query->num_rows()>0){
				return true;
			}else{
				return false;
			}
		}

		//get data from reservation table
		function retrieveDataReservation($custNIC){
			$query = $this->db->query('SELECT resID,drvNIC FROM reservation WHERE custNIC="'.$custNIC.'" AND resStatus=2 LIMIT 1');
			//$this->db->select('resID,drvNIC');
			//$this->db->where('custNIC',$custNIC);
			//$query=$this->db->get('reservation');

			return $query->result_array();
		}

		//get data from diver table
		function retrieveDataDriver($drvNIC){
			$this->db->select('drvFirstName,drvLastName');
			$this->db->where('drvNIC',$drvNIC);
			$query=$this->db->get('driver');

			return $query->result_array();
		}

		//update driver table and reservation table after a rate happens
		//resStatus will be updated as 3 since the driver cannot rate same trip again again
		function updateDriverRate($ratingValue,$resID){
			$this->db->select('drvNIC');
			$this->db->where('resID',$resID);
			$query=$this->db->get('reservation');
			$result=$query->result_array();

			foreach($result as $row){
				$drvNIC=$row['drvNIC'];
			}

			$this->db->select('count,sum');
			$this->db->where('drvNIC',$drvNIC);
			$query_next=$this->db->get('driver');

			$result=$query_next->result_array();
			foreach($result as $row){
				$count=$row['count'];
				$sum=$row['sum'];
			}

			$count+=1;
			$sum=$sum+$ratingValue;

			$value=array('count'=>$count,'sum'=>$sum);
			$this->db->where('drvNIC',$drvNIC);
            $this->db->update('driver',$value);

            $value=array('resStatus'=>3);
            $this->db->where('resID',$resID);
			$query=$this->db->update('reservation',$value);
		}
	}
?>