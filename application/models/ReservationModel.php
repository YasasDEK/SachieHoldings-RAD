<?php
class ReservationModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getType($pDate, $dDate)
    {
        $dateDiff = abs((strtotime($dDate) - strtotime($pDate)) / (60 * 60 * 24));

        $query =  $this->db->query('SELECT type.tyID,tyName, 
                                    CASE
                                        WHEN ' . $dateDiff . '<7 THEN tyDRate*' . $dateDiff . ' 
                                        WHEN ' . $dateDiff . '<30 THEN tyDRate*' . $dateDiff . '*tyWParcent
                                        ELSE tyDRate*' . $dateDiff . '*tyMPercent
                                    END AS estPrice     
                                    FROM (vehicle LEFT JOIN (SELECT DISTINCT vhRegNo
                                                            FROM reservation
                                                            WHERE (resPick < "' . $pDate . '" and resDrop > "' . $pDate . '") or (resPick BETWEEN "' . $pDate . '" AND "' . $dDate . '")
                                            ) as vehicle2 ON vehicle.vhRegNo = vehicle2.vhRegNo) INNER JOIN type ON vehicle.tyID = type.tyID
                                            WHERE vehicle2.vhRegNo IS NULL;');
        return $query->result_array();
    }

    public function getDriver($pDate, $dDate)
    {
        $query =  $this->db->query('SELECT driver.drvNIC,drvFirstName,drvLastName,sum,count
                                    FROM driver LEFT JOIN (SELECT DISTINCT drvNIC
                                                            FROM reservation
                                                            WHERE (resPick < "' . $pDate . '" and resDrop > "' . $pDate . '") or (resPick BETWEEN "' . $pDate . '" AND "' . $dDate . '")
                                            ) as vehicle2 ON driver.drvNIC=vehicle2.drvNIC
                                            WHERE vehicle2.drvNIC IS NULL;');
        return $query->result_array();
    }

    public function getTypeDet($tyID)
    {
        $query = $this->db->query('SELECT tyDRate,tyWParcent,tyMPercent FROM type WHERE tyID="' . $tyID . '";');
        return $query->row_array();
    }

    public function insert($pDate, $dDate, $custID, $estPrice)
    {
        $type = $this->input->post('resType');
        $query = $this->db->query('SELECT vehicle.vhRegNO 
                                   FROM vehicle LEFT JOIN (SELECT DISTINCT vhRegNo
                                                            FROM reservation
                                                            WHERE (resPick < "' . $pDate . '" and resDrop > "' . $pDate . '") or (resPick BETWEEN "' . $dDate . '" AND "' . $dDate . '")
                                                            ) as vehicle2 ON vehicle.vhRegNo = vehicle2.vhRegNo
                                    WHERE vehicle2.vhRegNo IS NULL AND tyID=' . $type . ' LIMIT 1;');
        $result = $query->row_array();

        $data = array(
            'custNIC' => $custID,
            'drvNIC' => $this->input->post('resDrv'),
            'vhRegNO' => $result['vhRegNO'],
            'resPick' => $pDate,
            'resDrop' => $dDate,
            'estCost' => $estPrice,
        );

        return $this->db->insert('reservation', $data);
    }

    public function view($custID)
    {
        $query = $this->db->query('SELECT resID,resPick,resDrop,drvFirstName,drvLastName,reservation.vhRegNo,tyName,estCost,IF(totCost IS NULL,"-",totCost) as cost, 
                                        CASE
                                            WHEN resStatus=0 THEN "Deleted"
                                            WHEN resStatus=1 THEN "Pending"
                                            ELSE "Completed"
                                        END AS status    
                                    FROM reservation,driver,vehicle,type
                                    WHERE reservation.custNIC="' . $custID . '" AND reservation.vhRegNo=vehicle.vhRegNo AND reservation.drvNIC=driver.drvNIC AND vehicle.tyID=type.tyID
                                    ORDER BY resPick');

        return $query->result_array();
    }

    public function delete($resID)
    {
        $this->db->query('UPDATE reservation SET resStatus=0 WHERE resID="' . $resID . '";');
        return;
    }
}
