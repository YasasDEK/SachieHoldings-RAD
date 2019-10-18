<?php  //Start the Session
$drvNIC = $_POST['drvNIC'];
$drvPassword = $_POST['drvPassword'];

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
	
	$query = "SELECT * FROM driver WHERE drvNIC ='$drvNIC' and drvPassword='$drvpassword'";
  
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count == 1){
			echo "Hai ";
		}
	else{
	echo  "Invalid Login Credentials.";
	}

	if ($conn->query($sql)){
	echo " New record is inserted sucessfully";
	}	
	else{
	echo "Error: ". $sql ."
	". $conn->error;
	}
	$conn->close();

}	
?>