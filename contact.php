<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	//Database connection

	$conn = new mysqli("localhost","root","","sparks_bank");
	if($conn->connect_error){
		die('Connection Failed  :'.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into contact(name, email, message)values(?, ?, ?)");
		$stmt->bind_param("sss",$name, $email, $message);
		$stmt->execute();
		echo "Submitted successfully..";
		$stmt->close();
		$conn->close();
	}



?>