<?php 

$host= 'localhost'; 
$user = 'Larry'; 
$password = 'footyhurry&95';
$database = 'dataphp'; 

$con = mysqli_connect($host, $user, $password, $database ); 
	if (!$con) {
		$msg = "Could not connect to database. <br/>"; 
		$msg .="Error Number: ".mysqli_connect_errno(); 
		$msg .= "Error: ".mysqli_connect_error(); 
		die($msg); 
	}

echo "You are connected to your database: "; 
echo mysqli_get_host_info($con); 

mysqli_close($con); 


 ?>