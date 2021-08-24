
<div class="header">
		<div class="top-header navbar navbar-default">
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<h2>Welcome to Meaty Meats <a href="register.html">Register </a> Or <a href="signin.html">Sign In </a></h2>
				</div>
			</div>
		</div>
		<div class="header-two navbar navbar-default">
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+254 729574690</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@meatymeats.com">meatymeats@nyama.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.html">Meaty <b>Meats</b></a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>			
					</div>

                    <header id = "header"> 
                    <button class= "navbar-toggler"
                    type ="button"
                    data-toogle ="collapse"
                    data-target ="#navbarNavAltMarkup"
                    aria-controls ="navbarNavAltMarkup"
                    aria-expanded ="false"
                    aria-label = "Toogle navigation"
                    >
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
							<li><a href="index.html" class="active"><b>Home</b></a></li>
							<li>
								<a href="red.html"><b>Red Meat</b></a>
							</li>
							<li>
								<a href="white.html"><b>White Meat</b></a>
							</li>
							<li>
								<a href="sea.html"><b>Sea Food</b></a>
							</li>				
							<li>
								<a href="processed.html"><b>Processed Meat</b></a>
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