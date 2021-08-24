<?php

   session_start();
   
    require_once('createdb.php');
    require_once('component.php');

// create instance of createdb class
    $database = new CreateDb("Productdb", "Producttb");

	

    if (isset($_POST['add'])){
        /// print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){
    
            $item_array_id = array_column($_SESSION['cart'], "product_id");
    
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'sea.php'</script>";
            }else{
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
    
                $_SESSION['cart'][$count] = $item_array;
            }
    
        }else{
    
            $item_array = array(
                    'product_id' => $_POST['product_id']
            );
    
            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Nyama Nyama | Product</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script src="js/jquery-1.11.1.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>

<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>

</head>
<body>
	<div class="header">
		<div class="top-header navbar navbar-default">
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<h2>Welcome to Nyama Nyama <a href="register2.php">Register </a> Or <a href="signin.html">Sign In </a></h2>
				</div>
			</div>
		</div>
		<div class="header-two navbar navbar-default">
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+254 707118880</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@meatymeats.com">meatymeats@nyama.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Nyama <b>Nyama</b></a></h1>
					</br> <p> For All Your Premium Meat Cuts </p>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>			
					</div>

					<header id = "header"> 
                    <span class ="navbar-toogler-icon"></span>
                    <button> 
                    <a href ="cart.php" class ="nav-item nav-link active">
                                <h5 class ="px-5 cart">
                                    <i class = "fas fa-shopping-cart"></i> CART 

                        <?php
	
                        if(isset($_SESSION['cart'])){
                            $count =count($_SESSION['cart']);
                            echo "<span id =\"cart_count\" class=\"text-warning bg-light\"> $count </span>";
                        }
                        else{
                            echo "<span id =\"cart_count\" class=\"text-warning bg-light\"> 0 </span>";
                        }
                        
                        ?>
						<div class="cart-box">
							<div class="clearfix"> </div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default">
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="index.php" class="active"><b>Home</b></a></li>
							<li>
								<a href="red.php"><b>Red Meat</b></a>
							</li>
							<li>
								<a href="white.php"><b>White Meat</b></a>
							</li>
							<li>
								<a href="sea.php"><b>Sea Food</b></a>
							</li>				
							<li>
								<a href="processed.php"><b>Processed Meat</b></a>
							</li>
							<li>
								<a href="../feedback/index.php"><b>Feedback</b></a>
							</li>
						</ul> 
						<div class="clearfix"> </div>
						<header class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul>
						</header>
					</div>
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> White Meat</a></li>
				<li class="active"> Products </li>
			</ol>
		</div>
	</div>
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-model-sec">
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="chickendeets.html"><img src="images/chickeny.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="chickendeets.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="chickendeets.html">Chicken </a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 500.00</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="porkdeets.html"><img src="images/porky.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="porkdeets.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="porkdeets.html"> Pork </a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 600.00</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="salmondeets.html"><img src="images/turkeey.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="turkeydeets.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="turkeydeets.html"> Turkey </a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 710.00</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="duckdeets.html"><img src="images/ducky.png" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="duckdeets.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="duckdeets.html"> Duck </a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 780.00</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="troutdeets.html"><img src="images/ostrich.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="turkeydeets.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="troutdeets.html"> Ostritch </a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 2000.00</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="tilapiadeets.html"><img src="images/chickwin.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="chickendeets.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="chickendeets.html"> Chicken Wings </a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 790.00</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="chickendeets.html"><img src="images/chickbrea.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="chickendeets.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="chickendeets.html">Chicken Breasts</a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 900.00</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids product-grids-mdl simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".7s">
					<div class="new-top">
						<a href="single.html"><img src="images/quail.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="single.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html"> Quail </a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 1200.00</span></p>
						</div>
					</div>
				</div>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".9s">
					<div class="new-top">
						<a href="single.html"><img src="images/trout.jpg" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="single.html">Quick View </a></li>
								<li><input type="number" class="item_quantity" min="1" value="1"></li>
								<li><a class="item_add" href=""> Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html"> Trout </a></h5>
						<div class="ofr">
							<p><span class="item_price">KSH 1520.00</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>Filter By Price</h4>            
						<div id="slider-range"></div>							
						<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						<script type='text/javascript'>
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
							 	
							});
						</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
					</div>
					<div class="sidebar-row">
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>KSH < 500</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>KSH < 800</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>KSH < 1000</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>KSH < 1200</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>KSH < 1500</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other</label>
						</div>
					</div>			 
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php">Meaty <b> Meats </b></a></h4>
					<p>2021 © Nyama Nyama. All rights reserved | Curated by 658308</p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="index.php">new</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our New Products </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required="">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>