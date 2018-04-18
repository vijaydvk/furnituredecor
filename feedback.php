<!DOCTYPE html>
<?php

session_start();
if (!isset($_SESSION['furnitureuser']))
 {

  $my_rand_strng = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -15); 
  

  
  $_SESSION['furnitureuser']=$my_rand_strng;
  
}/*
else{  					
									
									
									$hostdb = 'localhost';
									$namedb = 'furnituredecor';
									$userdb = 'root';
									$passdb = '';




									try {	
									
										$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
										$conn->exec("SET CHARACTER SET utf8");    
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$sql = $conn->prepare("SELECT user FROM cart");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
											if($result['user']==$_SESSION['furnitureuser'])
											{
												echo "present";
											}
											else
											{
												echo "no";
											}
											
										}
									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
}*/


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FeedBack | Furnituredecor</title>
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
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>info@furnituredecor.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
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
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
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
								<li><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#" class="active">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html" class="active">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							
							
							<?php
									
									
								 include('connection.php');




									try {	
									
									
										$sql = $conn->prepare("SELECT * FROM menu ");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
											
											
										echo '<div class="panel-heading">';
									    echo '<h4 class="panel-title">';
										
										if($result['submenu']==1)
										{
											
											$abcd = str_replace (" ", "", $result['menuname']);
											
										echo '<a data-toggle="collapse" data-parent="#accordian" href="#'.$abcd.'">';
										echo '<span class="badge pull-right"><i class="fa fa-plus"></i></span>';
										echo $result['menuname'];
										echo '</a>';
										
										}
										
										else
											
											{
												
								
									       echo '<h4 class="panel-title"><a href="productcategory.php?cat='.$result['menuname'].'">';
										   echo $result['menuname'];
										   echo '</a>';
								
							
											}
										
									    echo '</h4>';
								        echo '</div>';
										
										if($result['submenu']==1)
										{
										echo  '<div id="'.$abcd.'" class="panel-collapse collapse">';
									    echo '<div class="panel-body">';
										echo '<ul>';
										echo '<li><a href="productcategory.php?cat=workstation chairs">Workstation Chairs</a></li>';
										echo '<li><a href="productcategory.php?cat=executive chairs">Executive Chairs</a></li>';
										echo '<li><a href="productcategory.php?cat=visitors chairs">Visitors Chairs</a></li>';
										echo '</ul>';
									    echo '</div>';
								        echo '</div>';
										}
											
																			
											
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>
							
							</div>
							
						</div>
						<div class="brands_products"><!--brands_products-->
							<h2>Featured Items</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="product-details.php?id=42"> <span class="pull-right"></span>Altus Visitors Chair</a></li>
									<li><a href="product-details.php?id=2"> <span class="pull-right"></span>Coffee table St 105</a></li>
									<li><a href="product-details.php?id=31"> <span class="pull-right"></span>Dinning 1112</a></li>
									<li><a href="product-details.php?id=39"> <span class="pull-right"></span>Kruz workstation chairs</a></li>
									<li><a href="product-details.php?id=26"> <span class="pull-right"></span>Flora sofas</a></li>
									<li><a href="product-details.php?id=32"> <span class="pull-right"></span>Dinning Chair 2117</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
					</div>
				</div>
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Latest From our Blog</h2>
						<div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="images/blog/blog-one.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a  class="btn btn-primary" href="">Read More</a>
						</div>
						<div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="images/blog/blog-two.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a  class="btn btn-primary" href="">Read More</a>
						</div>
						<div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="images/blog/blog-three.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a  class="btn btn-primary" href="">Read More</a>
						</div>
						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer">		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="contact-us.php">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="reviews.php">Reviews</a></li>
								<li><a href="faq.php">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
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
					<div class="col-sm-2">
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
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Furnituredecor</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
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
	<script src="js/price-range.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>