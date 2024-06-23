<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$EventName= $_POST['EventName'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email,number,EventName) values(?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssssis", $firstName, $lastName, $gender, $email, $number, $EventName);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully completed...";
		$stmt->close();
		$conn->close();
	}
?>