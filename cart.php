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
    <title>Cart | Furnituredecor</title>
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

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed" id="dcart">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						
						<?php
									$user= $_SESSION['furnitureuser'];

									$v=0;

                                    try {	
									
									
										$sql = $conn->prepare("SELECT * FROM cart where user='$user'");
										$sql->execute();
										
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
										$v=1;	
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
																echo '<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">'.$name.'</a></h4>';
																echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web ID: '.$id.'</p>';
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
																echo '<a class="cart_quantity_up" onclick="inc('.$id.','.$price.')" style="cursor: pointer;"> + </a>';
																echo '<input class="cart_quantity_input" type="text" id="'.$id.'" value="'.$qty.'" autocomplete="off" size="2">';
																echo '<a class="cart_quantity_down" onclick="dec('.$id.','.$price.')"  style="cursor: pointer;"> - </a>';
																echo '</div>';
															echo '</td>';
															echo '<td class="cart_total">';
																echo '<p class="cart_total_price" id="tot'.$id.'">₹'.$tot.'</p>';
															echo '</td>';
															echo '<td class="cart_delete">';
																echo '<a class="cart_quantity_delete" onclick="rem('.$id.','.$price.')" style="cursor: pointer;"><i class="fa fa-times"></i></a>';
															echo '</td>';
														echo '</tr>';
										
										
										
										}
										if($v==0)
										{
											echo "<tr><td colspan='4'> No item found in cart</td></tr>";
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
						?>
										<tr>
									<td colspan="5">
								<p style="color:orange"><b>Terms of Delivery::</b></p>
								<p>Payment : Cash On delivery.</p>
								<p>Delivery : Within 10 Days.</p>
								<p>**Shipping Charges </b>May apply outside Tamilnadu.</p>
								</td>
									</tr>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
<?php if($v==1)
{

								echo '<a class="btn btn-default check_out" href="checkout.php" style="margin-top:-40px;margin-left:390px" >Check Out</a>';
	
}
	?><!--/#do_action-->
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer-->
	<script>
	
	function inc(val,pri)
	{
		var qty= parseInt(document.getElementById(val).value);
		qty=qty+1;
		var op=0;
		document.getElementById(val).value=qty;
		var name="tot"+val;
		var abc="pri"+val;
		var xyz="spri"+val;
        if(qty>=5)
		{
			op = pri - (pri * (5 / 100));
			document.getElementById(abc).innerHTML="₹"+op;
			document.getElementById(xyz).style.display="inline";
		}
		else
		{
			op=pri;
			document.getElementById(abc).innerHTML="₹"+op;
			document.getElementById(xyz).style.display="none";
		}
		document.getElementById(name).innerHTML="₹"+qty*op;
		
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               }
        };
        xmlhttp.open("GET","updatecart.php?q="+val+"&p="+qty,true);
        xmlhttp.send();

    }
	function dec(val,pri)
	{
		if(document.getElementById(val).value==1)
		{
			document.getElementById(val).value="1";
			
		}
		else
		{
		var qty= parseInt(document.getElementById(val).value);
		qty=qty-1;
		document.getElementById(val).value=qty;
		var name="tot"+val;
		var abc="pri"+val;
		var xyz="spri"+val;
		if(qty>=5)
		{
			op = pri - (pri * (5 / 100));
			document.getElementById(abc).innerHTML="₹"+op;
			document.getElementById(xyz).style.display="inline";
		}
		else
		{
			op=pri;
			document.getElementById(abc).innerHTML="₹"+op;
			document.getElementById(xyz).style.display="none";
		}
		document.getElementById(name).innerHTML="₹"+qty*op;
		
				if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               }
        };
        xmlhttp.open("GET","updatecart.php?q="+val+"&p="+qty,true);
        xmlhttp.send();
		}
	}
	
    function rem(val)
    {
	var rowid="re"+val;
    var row = document.getElementById(rowid);
    var table = row.parentNode;
    while ( table && table.tagName != 'TABLE' )
        table = table.parentNode;
    if ( !table )
        return;
    table.deleteRow(row.rowIndex);
	
					if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               }
        };
        xmlhttp.open("GET","deletecart.php?q="+val,true);
        xmlhttp.send();
	
	
	
	}		
	</script>

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>