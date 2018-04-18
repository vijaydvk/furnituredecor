<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
		<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>+91 9894481310</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>info@furnituredecor.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://fb.me/Furnituredecor.f"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
	
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="wishlist.php"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Products</a></li>
										<li><a href="allproducts.php">Product Details</a></li> 
										<li><a href="checkout.php">Checkout</a></li> 
										<li><a href="cart.php">Cart</a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="faq.php">FAQ's</a></li>
										<li><a href="reviews.php">Reviews</a></li>
                                    </ul>
                                </li> 
								<li><a href="bulkorder.php">Corporate orders</a></li>
								<li><a href="about-us.php">About</a></li>
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3" >
					<div class="search_box pull-right">
					    <form action="allproducts.php"  method="post">
						<input type="text" style="height:26px;width:135px;border:1px solid orange" name="search" />
						<button type="submit" class="fa fa-search" style="border:1px solid orange;color:orange;position:relative;right:30px;top:1px;height:26px;" ></button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header>

	<section id="cart_items">
		<div class="container">

			<div class="checkout-options">
				
			</div><!--/checkout-options-->

			<div class="register-req">
				<p>To create Furnituredecor account Please fill the below details</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Account Information</p>
							<form action="addaccount.php" method="post">
								<input type="text" placeholder="Display Name" value="<?php echo $_POST['name'];?>" name="name">
								<input type="email" placeholder="User Name" value="<?php echo $_POST['email'];?>" name="email">
								<input type="password" placeholder="Password" value="<?php echo $_POST['password'];?>" name="pass">

						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Shipping Address</p>
							<div class="form-one">

									<input type="text" placeholder="First Name *" name="fname">
									<input type="text" placeholder="Middle Name" name="mname">
									<input type="text" placeholder="Last Name *" name="lname">
									<input type="text" placeholder="Address 1 *" name="addr1">
									<input type="text" placeholder="Address 2" name="addr2">
							
									<select name="state">
										<option>-- State --</option>
										<option value="tamilnadu">tamilnadu</option>
										<option value="kerala">kerala</option>
										<option value="karnataka">karnataka</option>
										<option value="andra">andra</option>
									</select>

							</div>
							<div class="form-two">


									<select name="city">
										<option>--City--</option>
										<option value="chennai">chennai</option>
										<option value="madurai">madurai</option>
										<option value="coimbatore">coimbatore</option>
									</select>
									<input type="text" placeholder="Zip / Postal Code *" name="zip">
									<input type="password" placeholder="Confirm password" id="cpass">
									<input type="text" placeholder="Phone *" name="ph">
									<input type="text" placeholder="Mobile Phone" name="mph">
									<input type="text" placeholder="Fax" name="fax">	
						        	<button type="submit" class="btn btn-fefault cart">
										Create Account
									</button>
								</form>
							</div>
						</div>
					</div>
				
				</div>
			</div>

			
	</section> <!--/#cart_items-->

	

		<footer id="footer">		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2" style="width:33%;padding:left:104px;">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="bulkorder.php">Corporate Orders</a></li>
								<li><a href="contact-us.php">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="reviews.php">Reviews</a></li>
								<li><a href="faq.php">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2"  style="width:33%;padding:left:104px;">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="productcategory.php?cat=coffee tables">Coffee Tables</a></li>
								<li><a href="productcategory.php?cat=sofas">Sofas</a></li>
								<li><a href="productcategory.php?cat=visitors chairs">Visitors Chairs</a></li>
								<li><a href="productcategory.php?cat=dinning tables">Dinning tables</a></li>
								<li><a href="productcategory.php?cat=dinning chairs">Dinning Chairs</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2"  style="width:33%;padding:left:104px;">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="sl.php">Store Locator</a></li>
								<li><a href="terms.php">Terms and conditions</a></li>
								<li><a href="privacy.php">Privacy and Policy</a></li>
								<li><a href="returns.php">Returns</a></li>
								<li><a href="shipping.php">Shipping Charges</a></li>
							</ul>
						</div>
					</div>
	
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © Furnituredecor Inc. All rights reserved.</p>
					<!--<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>-->
				</div>
			</div>
		</div>
	</div>	
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>