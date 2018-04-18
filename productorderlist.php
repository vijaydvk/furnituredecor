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
<form name="info" id="info" action="updateacc.php" method="post">
	<section id="cart_items">
		<div class="container">
			<div class="register-req" style="margin-top:0px;">
				<p>List of current order details</p>
			</div><!--/register-req-->
			<div class="review-payment">
				<h2>Order Status</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Orderno</td>
							<td class="description">Product</td>
							<td class="price">Price</td>
							<td class="quantity">quantity</td>
						</tr>
					</thead>
					<tbody>
												<?php
									
									include('connection.php');
	
									$ntot=0;
                                    $id=$_GET["id"];
                                    try {	
									

										$sql = $conn->prepare("SELECT * FROM podetails where pono=$id");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$id=$result["pono"];
										
										
										$name=$result["name"].'ID:'.$result["id"];
										
		
										
										$path=$result["price"];
										$price=$result["quantity"];
										
										
														echo '<tr id="re'.$id.'">';
															echo '<td class="cart_product">';
															echo '<p>'.$id.'</p>';
															echo '</td>';
															echo '<td class="cart_description">';
															echo '<p>'.$name.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$path.'</p>';
															echo '</td>';
															echo '<td class="cart_quantity">';
															echo '<p>'.$price.'</p>';
															echo '</td>';
														echo '</tr>';
										
										
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
						?>
					</tbody>
				</table>

			</div>
			
			

		</div>
	</section> <!--/#cart_items-->

	

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script>
</body>
</html>