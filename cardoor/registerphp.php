<?php
 $drvFirstName = filter_input(INPUT_POST, 'drvFirstName');
 $drvLastName = filter_input(INPUT_POST, 'drvLastName');
 $drvNIC = filter_input(INPUT_POST, 'drvNIC');
 $drvEmail = filter_input(INPUT_POST, 'drvEmail');
 $drvDOB = filter_input(INPUT_POST, 'drvDOB');
 $drvAddress = filter_input(INPUT_POST, 'drvAddress');
 $drvLicense = filter_input(INPUT_POST, 'drvLicense');
 $drvMobile = filter_input(INPUT_POST, 'drvMobile');
 $drvLand = filter_input(INPUT_POST, 'drvLand');
 $drvPassword = filter_input(INPUT_POST, 'drvPassword');
 $drvCPass = filter_input(INPUT_POST, 'drvCPass');
 $drvPhoto = filter_input(INPUT_POST, 'drvPhoto');
 $drvLicensePhoto = filter_input(INPUT_POST, 'drvLicensePhoto');
 $empNIC = filter_input(INPUT_POST, 'empNIC');


//  if (!empty($drvFirstName)){
//  if (!empty($drvLastName)){
//  if (!empty($drvNIC)){
//  if (!empty($drvEmail)){	
//  if (!empty($drvDOB)){
//  if (!empty($drvAddress)){
//  if (!empty($drvLicense)){	
//  if (!empty($drvMoblie)){
//  if (!empty($drvLAND)){
//  if (!empty($drvPassword)){
//  if (!empty($drvPhoto)){
//  if (!empty($drvLicensePhoto)){
//  if (!empty($empNIC)){


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "rad";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if ($conn === false){
    die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
    echo "Connection Failed!";
}
else{
    echo "Connected Successfully";
$sql = "INSERT INTO driver(drvFirstName,drvLastName,drvNIC,drvEmail,drvDOB,drvAddress,drvLicense,drvMobile,drvLand,drvPassword,drvPhoto,drvLicensePhoto,empNIC)
values ('$drvFirstName','$drvLastName','$drvNIC','$drvEmail','$drvDOB','$drvAddress', '$drvLicense', '$drvMobile', '$drvLand','$drvPassword','$drvPhoto','$drvLicensePhoto','$empNIC')";
if ($conn->query($sql)){
echo " New record is inserted sucessfully";
}	
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

// }
// }
// }
// }
// }
// }
// }
// }
// }
// }
// }
// }
// }

?>



  
 