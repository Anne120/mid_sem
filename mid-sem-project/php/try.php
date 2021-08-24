<?php
$email = $_POST['email'];
$password = $_POST['password'];

//create connection
    $conn = new mysqli('localhost', 'root', '', 'midsem');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else {
		$stmt = $conn->prepare("insert into signin (email, password) values(?, ?)");
		$stmt->bind_param("ss", $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo'<script>alert(" Registration successfully...")</script>';
		$stmt->close();
		$conn->close();
	}
?>