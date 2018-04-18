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
    <title>Product Details | Furnituredecor</title>
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
<style>
.img-hover img {
    -webkit-transition: all .3s ease; /* Safari and Chrome */
  	-moz-transition: all .3s ease; /* Firefox */
  	-o-transition: all .3s ease; /* IE 9 */
  	-ms-transition: all .3s ease; /* Opera */
  	transition: all .3s ease;
}
.img-hover img:hover {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform:translateZ(0) scale(1.20); /* Safari and Chrome */
    -moz-transform:scale(1.20); /* Firefox */
    -ms-transform:scale(1.20); /* IE 9 */
    -o-transform:translatZ(0) scale(1.20); /* Opera */
    transform:translatZ(0) scale(1.20);
}
  
  
.grayscale {
  -webkit-filter: brightness(1.10) grayscale(100%) contrast(90%);
  -moz-filter: brightness(1.10) grayscale(100%) contrast(90%);
  filter: brightness(1.10) grayscale(100%); 
}
</style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
				<?php include('header.html');?>
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
			
				
				<div class="header-middle">
					<div class="product-details"><!--product-details-->
					
					
											<?php
									
									
								include('connection.php');

                                    $name=$_GET['id'];


									try {	
									
									
										$sql = $conn->prepare("SELECT * FROM product where id='$name' ");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result123=$result["path"];	
										$id=$result["id"];
										$name=$result["name"];
										$cate=$result["category"];
										$price=$result["price"];
										$qty=$result["stock"];
											$deta=	$result["details"];							
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>
					
					
					
						<div class="col-sm-5">
						<div class="view-product">
						
								<img src="<?php echo $result123; ?>" alt=""  data-target="#myModal" data-toggle="modal" id="orgimg">
								
							</div>
										
							
							<?php
									
									
			
                                    $a=0;
									$n=stripos("$name","-");
									if($n>1)
									{
								    $abc=str_split("$name",$n);
									$sname=$abc[0];
									}
									else
									{
										$sname=$name;
									}
                               
									try {	
									
									
										$sql1 = $conn->prepare("SELECT * FROM product where name like '%$sname%' and category='$cate' ");
										$sql1->execute();
										$count = $sql1->rowCount();
										if($count>1)
										{
											
										echo '<div id="similar-product" class="carousel" data-ride="carousel">';
								        echo '<div class="carousel-inner">';
																				
										while($result1 = $sql1->fetch(PDO::FETCH_ASSOC)){
											
										$result11=$result1["path"];	
										$id1=$result1["id"];
										$name1=$result1["name"];
										$cate1=$result1["category"];
										$price1=$result1["price"];
										$qty1=$result1["stock"];
											$deta1=	$result1["details"];
									    if($a==0)
										{
										echo '<div class="item active"><table><tr><td>';
												
										echo '<img src="'.$result11.'" height="100px" width="100px" onmouseover=cdisp("'.$result11.'") onclick="cname('.$id1.')" /><td></tr>';
										
										echo '<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$name1.'</td></tr></table>';
										
										echo "</div>";
										
										$a=1;

										}
										else
										{
										echo '<div class="item"><table><tr><td>';
										
										echo '<img src="'.$result11.'" height="100px" width="100px" onmouseover=cdisp("'.$result11.'") onclick="cname('.$id1.')" /><td></tr>';
										
										echo '<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$name1.'</td></tr></table>';
										
										echo "</div>";
											
										}
										}
										echo "</div>";
										
										echo   '<a class="left item-control" href="#similar-product" data-slide="prev" style="left:25%">';
									    echo '<i class="fa fa-angle-left"></i>';
								        echo '</a>';
								        echo '<a class="right item-control" href="#similar-product" data-slide="next" style="right:40%">';
									    echo '<i class="fa fa-angle-right"></i>';
								        echo '</a>';
							            echo '</div>';
	

										
                                        											
										}
									
										

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>
								
							
	<script>
	function cdisp(val)
	{
		var a=val;
		document.getElementById("orgimg").src=a;
		document.getElementById("max").src=a;
		
	}
	function cname(val)
	{
		                                var a=val;
										xhttp = new XMLHttpRequest();
										xhttp.onreadystatechange = function() {
										if (this.readyState == 4 && this.status == 200) {
										document.getElementById("disp").innerHTML =this.responseText;
												}
										};
										xhttp.open("GET", "chaproduct.php?q="+a, true);
										xhttp.send();
	}
	</script>
						
						
							
	

						</div><div id="disp">
						<div class="col-sm-7"><form action="addcart.php" method="post">
							<div class="product-information"><!--/product-information-->
								<h2>Category:<?php echo $cate; ?></h2>
								<h5 id="txt">Product name:<?php echo $name; ?></h5>
								<p>Web ID: <input style="border:none;" id="id" type="text" name="id" value="<?php echo $id;?>"><img src="images/product-details/rating.png" alt="" /></p>
								
								<span>
									<span>RS ₹<?php echo $price;?></span>
									<label>Quantity:</label>
									<input type="text" value="1" name="qty" /><br>
									<button type="submit" class="btn btn-fefault cart" name="submit" value="cart">
										<i class="fa fa-shopping-cart"></i>
										Add to Cart
									</button>&emsp;
									<button type="submit" class="btn btn-fefault cart" name="submit" value="list">
										<i class="fa fa-star"></i>
										Add to wishlist
									</button>
							

<div tabindex="-1" class="modal fade" id="myModal" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel" style="padding-left:10px;">
 
       
            <img src="<?php echo $result123; ?>" alt="" height="600px" width="800px" id="max" style="margin: 0;position: absolute;top: 50%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%)">

</div>
								</span>
								<p><b>Product Details:</b></p><p><?php echo nl2br($deta);?></p>
								<p>Payment : Cash On delivery.</p>
								<p>Delivery : Within 10 Days.</p>
								<p>**Shipping Charges </b>May apply outside Tamilnadu.</p>
							
								<!--<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b>Furnituredecor</p><br>-->
								</form>
							</div><!--/product-information-->
						</div></div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Reviews</a></li>
								<li><a href="#reviews" data-toggle="tab">Feed Back</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								
							<p><?php
										
										$sql = $conn->prepare("SELECT * FROM feedback where id=$id ORDER BY RAND() LIMIT 3 ");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										echo "<b>Name:</b>".$result["name"]."<br>";
										echo "<b>Review:</b>".$result["note"]."<br>";
                                        echo "<b>Ratings:</b>".$result["ratings"]."<br>";
                                        
										
										}?>
							</p>

		
							</div>
							
							
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
 								<form action="addfeedback.php" method="post">
								<p>Write your review
										<textarea name="feedback"></textarea>
										<input type="hidden" name="product" value="<?php echo $name; ?>" />
										<input type="hidden" name="id" value="<?php echo $id; ?>" />
										<b>Rating: </b> <input type="checkbox" name="rat[]" value="1" id="1" onmouseover="cal(1)">&nbsp;&nbsp;<input type="checkbox" name="rat[]" value="2"  id="2" onmouseover="cal(2)">&nbsp;&nbsp;<input type="checkbox" name="rat[]" value="3"  id="3" onmouseover="cal(3)">&nbsp;&nbsp;<input type="checkbox" name="rat[]" value="4"  id="4" onmouseover="cal(4)">&nbsp;&nbsp;<input type="checkbox" name="rat[]" value="5"  id="5" onmouseover="cal(5)">
										<input style="background-color:#43C6DB;" type="submit" class="btn btn-default pull-right" name="Add" value="Submit">
											
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
                 </div>
			</div>
		</div>
	</section>
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer-->
	<script>
	function cal(check)
	{
		document.getElementById(check).checked = true;
	}
	</script>
	
  <link rel="stylesheet" href="pop/new3.css">
  <script src="pop/jquery.min.js"></script>
  <script src="pop/new3.css"></script>	
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>