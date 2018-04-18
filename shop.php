<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Categories | E-Shopper</title>
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
						<h2 class="title text-center">Category Items</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<br>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;Workstation Chairs</p><a href="productcategory.php?cat=workstation chairs">
										<img src="images/categorypage/workstation.jpg" alt="" /><br><br>
										
										</a>
									</div>
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center"><br>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;Executive Chairs</p><a href="productcategory.php?cat=executive chairs">
										<img src="images/categorypage/executive.jpg" alt="" /></a><br><br>
										
										
									</div>

								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center"><br>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;Visitors Chairs</p><a href="productcategory.php?cat=visitors chairs">
										<img src="images/categorypage/visitors.jpg" alt="" /><br><br>
										
										</a>
									</div>

								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sofa</p><a href="productcategory.php?cat=sofas">
										<img src="images/categorypage/sofa.jpg" alt="" />
										</a>
										
									</div>

									<!--<img src="images/home/new.png" class="new" alt="" />-->
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<p>Dining Tables</p><a href="productcategory.php?cat=dinning tables">
										<img src="images/categorypage/dinning.jpg" alt="" /></a>

									</div>


									<!--<img src="images/home/sale.png" class="new" alt="" />-->
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<p>Dining Chairs</p><a href="productcategory.php?cat=dinning chairs">
										<img src="images/categorypage/Chair 111.jpg" alt=""  /></a>

									</div>


									<!--<img src="images/home/sale.png" class="new" alt="" />-->
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
								    <p>Coffee Tables</p><a href="productcategory.php?cat=coffee tables">
										<img src="images/categorypage/coffeetables.jpg" alt="" /></a>

										
									</div>

								</div>

							</div>
						</div>					

					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer--> 
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>