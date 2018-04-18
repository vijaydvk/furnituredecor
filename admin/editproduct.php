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

	<section id="cart_items">
		<div class="container">
			<div class="register-req" style="margin-top:0px;">
				<p>Edit Product Details</p>
			</div><!--/register-req-->

			
			<div class="product-details"><!--product-details-->
					
					
											<?php
									
									include('connection.php');
								

                                    $name=$_GET['id'];


									try {	
									
									
										$sql = $conn1->prepare("SELECT * FROM product where id='$name' ");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result1=$result["path"];	
										  $new123=str_replace("admin/","",$result1);
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
						<form action="updatepro.php" method="post" enctype="multipart/form-data">
							<div class="view-product">
						
								<img src="<?php echo $new123; ?>" alt="" />
								
							</div>
							Change Image:
				            <input type="file" name="image" />
                         <input type="hidden" name="cat" value="<?php echo $cate;?>" />
						 <input type="hidden" name="nimage" value="<?php echo $new123;?>" />
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
							<p>Web ID: <input style="border:none;" type="text" name="id" value="<?php echo $id;?>"></p>
								Name of the Product:<h2><input type="text" value="<?php echo $name;?>" name="name"></h2>
								Rate of the Product:<h2><input type="text" value="<?php echo $price;?>" name="price"></h2>
								Quantity:<h2><input type="text" value="<?php echo $qty;?>" name="qty"></h2>
								Details:<textarea class="form-group col-md-12" name="details" rows="8"><?php echo $deta;?></textarea>
								
							   
                                <br><br> <input type="submit" name="submit" value="Update" />
								
								
								<!--<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b>Furnituredecor</p><br>-->
								</form>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

			
			
			

		</div>
	</section> <!--/#cart_items-->

	

 
</body>
</html>