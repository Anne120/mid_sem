<?php


$amount = $_POST['amount'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];
$phone = $_POST['phone'];
$pay = $_POST['pay'];


//create connection
    $conn = new mysqli('localhost', 'root', '', 'broiler_chicken');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into paymnet( amount,quantity,total,phone,pay) values(?, ?,?,?,?)");
		$stmt->bind_param("iiiis", $amount,$quantity,$total,$phone,$pay);
		$execval = $stmt->execute();
		echo $execval;
		echo'<script>alert(" Registration successfully...")</script>';
		$stmt->close();
		$conn->close();
	}
	

?>