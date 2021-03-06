<?php


            $name = $_POST['name'];
			$card = $_POST['card'];
            $exp_month= $_POST ['exp_month'];
			$cvv = $_POST['cvv'];
            $exp_year= $_POST ['exp_year'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $zip = $_POST['zip'];
            $country = $_POST['country'];

	$server ="localhost";
    $username ="root";
    $password ="";
    $dbname = "midsem";
        
    $conn = mysqli_connect ($server, $username, $password, $dbname);

    if($conn-> connect_error){
        echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("INSERT into checkout (name, card, exp_month, cvv, exp_year, email, address, zip, country ) values (?, ?, ?, ?,?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $name, $card, $exp_month, $cvv, $exp_year, $email, $address, $city, $zip, $country);
        $execval = $stmt->execute();
		echo $execval;
		echo'<script>alert(" Registration successfully...")</script>';
		$stmt->close();
		$conn->close();
	}
        
	?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout Card</title>
    <link href='https://www.soengsouy.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

<h2> Checkout Form</h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form  method="POST" id="validate" >
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="cardname" placeholder="Anne Nyambura" required>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="annenyambura@gmail.com" required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="110 W. 15th Kileleshwa" required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Nairobi" required>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">Country</label>
                                <input type="text" id="state" name="country" placeholder="Kenya"required>
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="12000"required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="cname" class="name">Name on Card</label>
                        <input type="text" id="cname" name="name" placeholder="Anne Nyambura"required>
                        <label for="ccnum" class="card">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required>
                        <label for="expmonth" class="exp_month">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September"required>
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="exp_year" placeholder="2021"required>
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352"required>
                            </div>
                        </div>
                    </div>
                </div>
                <label>
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
            <p><a href="#">IPHONE 12 Pro Mac</a> <span class="price">$1500</span></p>
            <p><a href="#">SAMSUNG S21</a> <span class="price">$1500</span></p>
            <p><a href="#">OPPO F14</a> <span class="price">$1400</span></p>
            <p><a href="#">HUAWEI 20 Mac</a> <span class="price">$1200</span></p>
            <hr>
            <p>Total <span class="price" style="color:black"><b>$12600</b></span></p>
        </div>
    </div>
</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zip: {
                required: true,
            },
            cardname: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input full name*",
            email:"Please input email*",
            city:"Please input city*",
            address:"Please input address*",
            state:"Please input state*",
            zip:"Please input address*",
            cardname:"Please input card name*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>
</body>
</html>