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
    <link rel="icon" type="image/png" href="favicon.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Furnituredecor</title>
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

</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<?php include('header.html');?>
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-666 animated flipInX">
									<img src="images/caurosal/almore.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-666 animated flipInX">
									<img src="images/caurosal/Coffee St 106.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">

								<div class="col-sm-666 animated flipInX">
									<img src="images/caurosal/Dining 1380-2117.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
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
									   
										
										if($result['submenu']==1)
										{
											
											$abcd = str_replace (" ", "", $result['menuname']);
										echo '<h4 class="panel-title">';	
										echo '<a data-toggle="collapse" data-parent="#accordian" href="#'.$abcd.'">';
										echo '<span class="badge pull-right"><i class="fa fa-plus"></i></span>';
										echo $result['menuname'];
										echo '</a></h4>';
										
										}
										
										else
											
											{
												
								
									       echo '<h4 class="panel-title"><a href="productcategory.php?cat='.$result['menuname'].'">';
										   echo $result['menuname'];
										   echo '</a></h4>';
								
							
											}
										
									    
								        echo '</div>';
										
										if($result['submenu']==1)
										{
										echo  '<div id="'.$abcd.'" class="panel-collapse collapse">';
									    echo '<div class="panel-body">';
										echo '<ul>';
										echo '<li><a href="productcategory.php?cat=workstation chairs" style="color: #fe980f;">Workstation Chairs</a></li>';
										echo '<li><a href="productcategory.php?cat=executive chairs" style="color: #fe980f;">Executive Chairs</a></li>';
										echo '<li><a href="productcategory.php?cat=visitors chairs" style="color: #fe980f;">Visitors Chairs</a></li>';
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
									<li><a href="product-details.php?id=42" style="color: #fe980f;"> <span class="pull-right"></span>Altus Visitors Chair</a></li>
									<li><a href="product-details.php?id=2"  style="color: #fe980f;"> <span class="pull-right"></span>Coffee table St 105</a></li>
									<li><a href="product-details.php?id=31" style="color: #fe980f;"> <span class="pull-right"></span>Dinning 1112</a></li>
									<li><a href="product-details.php?id=39" style="color: #fe980f;"> <span class="pull-right"></span>Kruz workstation chairs</a></li>
									<li><a href="product-details.php?id=26" style="color: #fe980f;"> <span class="pull-right"></span>Flora sofas</a></li>
									<li><a href="product-details.php?id=32" style="color: #fe980f;"> <span class="pull-right"></span>Dinning Chair 2117</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
						
						<?php
									
									
						




									try {	
									
			
										$sql = $conn->prepare("SELECT * FROM product ORDER BY RAND() LIMIT 6;");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result1=$result["path"];	
										$id=$result["id"];
										$price=$result["price"];
										$disp=$result["name"];
										$resultee = substr($disp, 0, 20);
										$disp=$resultee.'-'.$result["category"];
										
										echo '<div class="col-sm-4">';
							            echo '<div class="product-image-wrapper">';
								        echo '<div class="single-products">';
										echo '<div class="productinfo text-center">';
										
										 echo "<img src='".$result1."' height='228' width='328'/>";
										
										//echo '<img src="'$result1'" alt="" />';
										echo '<h2>₹'.$price.'</h2>';
										echo '<p >'.$disp.'</p>';
										echo '<a href="addcart.php?id='.$id.'&submit=cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo '</div>';
								        echo '</div>';
								        echo '<div class="choose">';
									    echo '<ul class="nav nav-pills nav-justified">';
								
										echo '<li><a href="addcart.php?id='.$id.'&submit=list"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo '<li><a href="product-details.php?id='.$id.'"><i class="fa fa-plus-square"></i>Product Details</a></li>';
									    echo '</ul>';
								        echo '</div>';
							            echo '</div>';
						                echo '</div>';
											
											
											
											
											
											
										
											
																			
											
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>
						
						
					

					</div>
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Popular items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
<?php
									
									
						




									try {	
									
			
										$sql = $conn->prepare("SELECT * FROM product ORDER BY RAND() LIMIT 3;");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result1=$result["path"];	
										$id=$result["id"];
										$price=$result["price"];
										$disp=$result["name"];
										$resultee = substr($disp, 0, 20);
										$disp=$resultee.'-'.$result["category"];
										
										echo '<div class="col-sm-4">';
							            echo '<div class="product-image-wrapper">';
								        echo '<div class="single-products">';
										echo '<div class="productinfo text-center">';
										
										 echo "<img src='".$result1."' height='228' width='328'/>";
										
										//echo '<img src="'$result1'" alt="" />';
										echo '<h2>₹'.$price.'</h2>';
										echo '<p >'.$disp.'</p>';
										echo '<a href="addcart.php?id='.$id.'&submit=cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo '</div>';
								        echo '</div>';
								        echo '<div class="choose">';
									    echo '<ul class="nav nav-pills nav-justified">';
								
										echo '<li><a href="addcart.php?id='.$id.'&submit=list"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo '<li><a href="product-details.php?id='.$id.'"><i class="fa fa-plus-square"></i>Product Details</a></li>';
									    echo '</ul>';
								        echo '</div>';
							            echo '</div>';
						                echo '</div>';
											
											
											
											
											
											
										
											
																			
											
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>
						
								</div>
								<div class="item">	
								<?php
									
									
						




									try {	
									
			
										$sql = $conn->prepare("SELECT * FROM product ORDER BY RAND() LIMIT 3;");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result1=$result["path"];	
										$id=$result["id"];
										$price=$result["price"];
										$disp=$result["name"];
										$resultee = substr($disp, 0, 20);
										$disp=$resultee.'-'.$result["category"];
										
										echo '<div class="col-sm-4">';
							            echo '<div class="product-image-wrapper">';
								        echo '<div class="single-products">';
										echo '<div class="productinfo text-center">';
										
										 echo "<img src='".$result1."' height='228' width='328'/>";
										
										//echo '<img src="'$result1'" alt="" />';
										echo '<h2>₹'.$price.'</h2>';
										echo '<p >'.$disp.'</p>';
										echo '<a href="addcart.php?id='.$id.'&submit=cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo '</div>';
								        echo '</div>';
								        echo '<div class="choose">';
									    echo '<ul class="nav nav-pills nav-justified">';
								
										echo '<li><a href="addcart.php?id='.$id.'&submit=list"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo '<li><a href="product-details.php?id='.$id.'"><i class="fa fa-plus-square"></i>Product Details</a></li>';
									    echo '</ul>';
								        echo '</div>';
							            echo '</div>';
						                echo '</div>';
											
											
											
											
											
											
										
											
																			
											
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>

								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>	
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>