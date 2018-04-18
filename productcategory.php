<!DOCTYPE html>
<?php

session_start();

if (!isset($_SESSION['furnitureuser']))
 {

  $my_rand_strng = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -15); 
  
  $_SESSION['furnitureuser']=$my_rand_strng;
  
}


?>
<html lang="en">
<head>
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

</head><!--/head-->

<body>
	<header id="header"><!--header-->
				<?php include('header.html');?>
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
						<h2 class="title text-center"><?php echo $_GET['cat'];?></h2>
						
						
						<?php
									
									


                                    $name=$_GET['cat'];
									if(!isset($_GET['start']))
										$start=0;
									else
									$start=$_GET['start'];
									$lim=6;


									try {	
									
									
										$sql = $conn->prepare("SELECT * FROM product where category='$name' and visble='0'");
										$sql->execute();
										
										$count=$sql->rowCount();
										
										$page=$count/$lim;
										
										$float = floatval($page); //Convert the string to a float
                                        if($float && intval($float) != $float) // Check if the converted int is same as the float value...
                                        {
                                          $page=$page+1;
                                        }
										
							            $sql = $conn->prepare("SELECT * FROM product where category='$name' and visble='0' limit $start,$lim");
										$sql->execute();
										
										
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result1=$result["path"];	
										$id=$result["id"];
										$price=$result["price"];
										$disp=$result["name"];
										
										echo '<div class="col-sm-4 animated bounceIn">';
							            echo '<div class="product-image-wrapper">';
								        echo '<div class="single-products">';
										echo '<div class="productinfo text-center">';
										
										 echo "<img src='".$result1."' height='228' width='328'/>";
										
										//echo '<img src="'$result1'" alt="" />';
										echo '<h2>₹'.$price.'</h2>';
										echo '<p>'.$disp.'</p>';
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
											
											
										
											
											
											
										/*echo '<div class="panel-heading">';
									    echo '<h4 class="panel-title">';
										
									    $abcd = str_replace (" ", "", $result['menuname']);
											
										echo '<a data-toggle="collapse" data-parent="#accordian" href="#'.$abcd.'">';
										echo '<span class="badge pull-right"><i class="fa fa-plus"></i></span>';
										echo $result['menuname'];
										echo '</a>';*/
										
										
											
																			
											
										}
									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>
						
						
						
	
						
					</div>
					<?php
										$page=intval($page);
									    echo '<div class="pagination-area">';
							            echo '<ul class="pagination">';
											for($i=0;$i<$page;$i++)
											{
												$new=$lim*$i;
												$disp11=$i+1;
												
												$ac=$start/$lim;
												$ac=$ac+1;
												
                                            if($disp11==$ac)
                                               echo '<li><a href="productcategory.php?cat='.$name.'&start='.$new.'" class="active">'.$disp11.'</a></li>';											
											else	
								            echo '<li><a href="productcategory.php?cat='.$name.'&start='.$new.'">'.$disp11.'</a></li>';
											}
                   							echo '</ul>';
						                   echo '</div>';
											
											?>
					
					
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