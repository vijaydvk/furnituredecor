<!DOCTYPE html>


<?php
include('connection.php');
session_start();
if (!isset($_SESSION['furnitureuser']))
 {

  $my_rand_strng = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -15); 
  

  
  $_SESSION['furnitureuser']=$my_rand_strng;
  
}





$user=$_SESSION['furnitureuser'];

                                




									try {	
									
									
										
										$sql = $conn->prepare("SELECT * FROM cart where user='$user'");
										$sql->execute();
										$count=$sql->rowCount();
										if($count==0)
										{
										echo "<script>alert('There is No Items in cart'); window.history.go(-1); </script>";
										}
										if(isset($_SESSION['loggedin']))
										{
										$sql = $conn->prepare("SELECT * FROM customer where display='$user'");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){											
                                 		$name=$result["display"];
										$email=$result["email"];
										$fname=$result["firstname"];
										$mname=$result["middlename"];
										$lname=$result["lastname"];
										$addr1=$result["addr1"];
										$addr2=$result["addr2"];
										$zip=$result["zip"];
										$city=$result["city"];
										$state=$result["state"];
										$phone=$result["phone"];
										$mobile=$result["mobile"];
										$fax=$result["fax"];
										
								
										}
										}
										else
								        echo "<script>alert('Please Log in First'); window.history.go(-1); </script>";
										
                                        }
									catch(PDOException $e) {
										echo $e->getMessage();
															}



?>


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

<body onload="dis()">
		<header id="header"><!--header-->
				<?php include('header.html');?>
	</header>
<form name="info" id="info" action="addorder.php" method="post">
	<section id="cart_items">
		<div class="container">
			<div class="register-req" style="margin-top:0px;">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
									<input type="text" value="<?php echo $fname;?>" name="fname" />
									<input type="text" value="<?php echo $mname;?>" name="mname" />
									<input type="text" value="<?php echo $lname;?>" name="lname" />
									<input type="text" value="<?php echo $addr1;?>" name="addr1" />
									<input type="text" value="<?php echo $addr2;?>" name="addr2" />
							</div>
							<div class="form-two">
									<select name="city">
										<option value="<?php echo $city;?>"><?php echo $city;?></option>

									</select>
									<select name="state" onchange="change()" id="state">
										<option value="<?php echo $state;?>" select="selected"><?php echo $state;?></option>
                                        <option value="kerala">Kerala</option>
									</select>
									<input type="text" value="<?php echo $zip;?>" name="zip" />
									<input type="text" value="<?php echo $phone;?>" name="phone" />
									<input type="text" value="<?php echo $mobile;?>" name="mobile" />
									<input type="text" value="<?php echo $fax;?>" name="fax" />
							</div>
						</div>
					</div>
					<script>
					function change()
					{
						var n=document.info.state.value;
						if(n=="tamilnadu")
						{
							document.getElementById("shipping").innerHTML="Free";
						}
						else
						{
							document.getElementById("shipping").innerHTML="May Apply";
						}
					}
					</script>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message" id="message" placeholder="Notes about your order, Special Notes for Delivery or Specifies Landmark" rows="16"></textarea>
							<label><input type="checkbox" id="enable" onclick="dis()">Edit Address to bill</label>

						</div>	
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed" style="padding-right:10px" >
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
												<?php
									
									
						
									$ntot=0;

                                    try {	
									

										$sql = $conn->prepare("SELECT * FROM cart where user='$user'");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$id=$result["webid"];
										
										
										$name=$result["name"];
										
		
										
										$path=$result["path"];
										$price=$result["price"];
										$qty=$result["qty"];
										
										
														echo '<tr id="re'.$id.'">';
															echo '<td class="cart_product">';
															echo '<a href=""><img src="'.$path.'" alt="" height="100" width="100"></a>';
															echo '</td>';
															echo '<td class="cart_description">';
																echo '<h4>&nbsp;&nbsp;&nbsp;<a href="">'.$name.'</a></h4>';
																echo '<p>&nbsp;&nbsp;&nbsp;Web ID: '.$id.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															   if($qty>=5)
																{
																	echo '<p id="spri'.$id.'" style="display:block"><strike>₹'.$price.'</strike></p>';
																	$sp = $price - ($price * (5 / 100));
																	echo '<p id="pri'.$id.'">₹'.$sp.'</p>';
																	$tot=$qty*$sp;
																}
																else
																{
																echo '<p id="spri'.$id.'" style="display:none"><strike>₹'.$price.'</strike></p>';
																echo '<p id="pri'.$id.'">₹'.$price.'</p>';
																$tot=$qty*$price;
																
																}
															echo '</td>';
															echo '<td class="cart_quantity">';
																echo '<div class="cart_quantity_button">';
																
																echo '<input class="cart_quantity_input" type="text" id="'.$id.'" value="'.$qty.'" autocomplete="off" size="2">';
																echo '</div>';
															echo '</td>';
															echo '<td class="cart_total">';
																echo '<p class="cart_total_price" id="tot'.$id.'">₹'.$tot.'</p>';
																$ntot=$ntot+$tot;
																
															echo '</td>';
														echo '</tr>';
										
										
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
						?>
						<tr>
							<td colspan="3">&nbsp;</td>
							<td  colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$<?php echo $ntot; ?></td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td><p id="shipping">Free</p></td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$<?php echo $ntot; ?></span></td>
									</tr>
						
								</table>
							</td>
						</tr>
							
									<tr>
									<td colspan="5">
								<p style="color:orange"><b>Note:</b></p>
								<p>Payment : Cash On delivery(Deliverd max of 10 days)</p>
								<p>**Shipping Charges </b>May apply outside Tamilnadu.</p>
								<p>Place More than 5 quantity Get 5% Discount on all Products</p>
									</td>
									</tr>
					</tbody>
				</table>

			</div>						<button type="submit" class="btn btn-default pull-right" id="sub" style="background-color:orange;" enabled="enable">
											Confirm Order
										</button>
				</form>						

		</div>
	</section> <!--/#cart_items-->
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script>
	function dis()
	{
		var form = document.getElementById("info");
        var elements = form.elements;
		var lfckv = document.getElementById("enable").checked;
		
		if(lfckv==true)
		{
	    for (var i = 0, len = elements.length; i < len; ++i) {
        elements[i].readOnly=false;
        }
		}
		else
		{
	    for (var i = 0, len = elements.length; i < len; ++i) {
        elements[i].readOnly = true;
        }
		document.getElementById("message").disabled=false;
		document.getElementById("enable").disabled=false;
		document.getElementById("sub").disabled=false;
		}
			var n=document.info.state.value;
						if(n=="tamilnadu")
						{
							document.getElementById("shipping").innerHTML="Free";
						}
						else
						{
							document.getElementById("shipping").innerHTML="May Apply";
						}
	}
	
	</script>
</body>
</html>