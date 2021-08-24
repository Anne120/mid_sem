<?php


$name = $_POST['name'];
$card = $_POST['card'];
$expmonth = $_POST['expmonth'];
$cvv = $_POST['cvv'];
$expyear = $_POST['expyear'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$country = $_POST['country'];


//create connection
    $conn = new mysqli('localhost', 'root', '', 'midsem');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into checkout( name, card, expmonth, cvv, expyear, email, address, city, zip, country) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sisiisssis", $name, $card, $expmonth, $cvv, $expyear, $email, $address, $city, $zip, $country);
		$execval = $stmt->execute();
		echo $execval;
		echo'<script>alert(" Registration successfully...")</script>';
        echo "<script>window.location = 'index.php'</script>";
        ;
		$stmt->close();
		$conn->close();
	}
	

?>