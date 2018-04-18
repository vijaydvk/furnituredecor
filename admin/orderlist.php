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
							<td class="description">Billing address</td>
							<td class="price">Note</td>
							<td class="quantity">Date</td>
							<td  class="price">View</td>
						</tr>
					</thead>
					<tbody>
												<?php
									
						            include('../connection.php');
									$ntot=0;
										if(!isset($_GET['start']))
										$start=0;
									else
									$start=$_GET['start'];
									$lim=2;

                                    try {	
									
		
										$sql = $conn->prepare("SELECT * FROM po limit $start,$lim");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$id=$result["pono"];
										
										
										$name=$result["address"];
										
		
										
										$path=$result["note"];
										$price=$result["date"];
										
										
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
															echo '<p>'.date("l, F j, Y, g:i A", strtotime($price)).'</p>';
															echo '</td>';
															echo '<td>';
															echo '<a href="productorderlist.php?id='.$id.'">View Details</a><br>';
															echo '<a href="example_006.php?id='.$id.'">Mark as Delivered</a>';
															echo '</td>';
														echo '</tr>';
								
										
										}
										$sql = $conn->prepare("SELECT * FROM po ");
										$sql->execute();
										
										$count=$sql->rowCount();
										
										$page=$count/$lim;
										
										$float = floatval($page); //Convert the string to a float
                                        if($float && intval($float) != $float) // Check if the converted int is same as the float value...
                                        {
                                          $page=$page+1;
                                        }

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
						?>
					</tbody>
				</table>
				
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
                                               echo '<li><a href="orderlist.php?start='.$new.'" class="active">'.$disp11.'</a></li>';											
											else	
								            echo '<li><a href="orderlist.php?start='.$new.'">'.$disp11.'</a></li>';
											}
                   							echo '</ul>';
						                   echo '</div>';
											
											?>

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