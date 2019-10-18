<?php
class vehicleModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getType(){
        $this->db->select('tyID,tyName');
        $this->db->where('tyStatus',1);
        $query = $this->db->get('type');
        return $query->result_array();
    }

    public function insertDB($dataFile){
        $data = array(
            'vhRegNo' => $this->input->post('vNum'),
            'tyID' => $this->input->post('vType'),
            'vhInsurance' => $this->input->post('vIns'),
            'vhName' => $this->input->post('vName'),
            'vhColor' => $this->input->post('vColor'),
            'vhDescription' => $this->input->post('vDesc'),
            'vhPhoto' => $dataFile
        );

        return $this->db->insert('vehicle',$data);
    } 

    public function viewDB($regNo=FALSE){
        if($regNo==FALSE){
            $query =  $this->db->query('SELECT vhRegNo,tyName,vhInsurance,vhName,vhColor,vhDescription,IF(vhStatus=0,"Removed","Active") AS vhStatus,vhPhoto FROM vehicle,type WHERE vehicle.tyID=type.tyID ORDER BY vhStatus;');
            return $query->result_array();
        }else{
            $query =  $this->db->query('SELECT vhRegNo,vehicle.tyID,tyName,vhInsurance,vhName,vhColor,vhDescription,vhPhoto FROM vehicle,type WHERE vehicle.tyID=type.tyID AND vhRegNo="'.$regNo.'";');
            return $query->row_array();
        }
       
    }

    public function updateDB($regNo,$dataFile){
        $query =  $this->db->query('SELECT * FROM vehicle WHERE vhRegNo="'.$regNo.'";');
        $result = $query->row_array();

        if($this->input->post('vType')==NULL){
            $typ=$result['tyID'];
        }else{
            $typ=$this->input->post('vType');
        }

        if($this->input->post('vIns')==""){
            $ins=$result['vhInsurance'];
        }else{
            $ins=$this->input->post('vIns');
        }

        if($this->input->post('vName')==""){
            $name=$result['vhName'];
        }else{
            $name=$this->input->post('vName');
        }

        if($this->input->post('vColor')==""){
            $color=$result['vhColor'];
        }else{
            $color=$this->input->post('vColor');
        }

        if($this->input->post('vDesc')==""){
            $Desc=$result['vhDescription'];
        }else{
            $Desc=$this->input->post('vDesc');
        }

        if($dataFile==""){
            $dataFile=$result['vhPhoto'];
        }

        $data =array(
            'tyID' => $typ,
            'vhInsurance' => $ins,
            'vhName' => $name,
            'vhColor' => $color,
            'vhDescription' => $Desc,
            'vhPhoto' => $dataFile
        );

        $this->db->where('vhRegNo',$regNo);
        return $this->db->update('vehicle',$data);

    }

    public function delete($regNo){
        $this->db->query('UPDATE vehicle SET vhStatus=0 WHERE vhRegNo="'.$regNo.'";');
        return;
    }

}
