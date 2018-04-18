<!DOCTYPE html>
<?php

session_start(); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
   
</head><!--/head-->

<body>
		<header id="header"><!--header-->
				<?php include('header.html');?>
	</header>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
   	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Corporate Orders</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="addbulkorder.php">
				            <div class="form-group col-md-6">
				                <input type="text" name="cat" class="form-control" required="required" placeholder="Category">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="sku" class="form-control" required="required" placeholder="Sku or Product name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="qty" class="form-control" required="required" placeholder="No of Quantity" onblur="call()" id="qty">
								<script>
								function call()
								{
									var d;
									d=document.getElementById("qty").value;
									if(d>=5)
									document.getElementById("disp").innerHTML="You Get 5% Discount on this Order";
								else
									document.getElementById("disp").innerHTML="Place 5 Quantity and above to Get 5% Discount";
								}
								</script>
				            </div>
							
							<div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
							
							<div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
							
							<div class="form-group col-md-6">
				                <input type="text" name="contact" class="form-control" required="required" placeholder="Contact No">
				            </div>
							
							<div class="form-group col-md-6">
				                <input type="text" name="cname" class="form-control" required="required" placeholder="Company name">
				            </div>
							
							<div class="form-group col-md-6">
				                <input type="text" name="city" class="form-control" required="required" placeholder="City">
				            </div>
							
							<div class="form-group col-md-6">
				                <input type="text" name="pincode" class="form-control" required="required" placeholder="Pincode">
				            </div>
							
							<div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Special Note(If any)..."></textarea>
				            </div>  
				                          
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>&nbsp;&nbsp;
							<p id="disp" style="color:red"></p>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
				<p>K K Brothers,</p>
							<p>266,Poonthottam,</p>
							<p>Fifteen Velampalayam,</p>
							<p>Tiruppur-641652</p>
							<p>+91 9894481310</p>
							<p>Info@furnituredecor.co.in</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="https://fb.me/Furnituredecor.f"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>