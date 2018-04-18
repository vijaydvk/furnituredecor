<!DOCTYPE html>
<?php
session_start();
 if(!isset($_SESSION["loggedin"]))
{
	echo "<script>
             alert('Log in to know Account details');
             window.history.go(-1);
     </script>";
}

?>

<?php
include('connection.php');



if (!isset($_SESSION['furnitureuser']))
 {

  $my_rand_strng = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -15); 
  

  
  $_SESSION['furnitureuser']=$my_rand_strng;
  
}

                                 		$name="";
										$email="";
										$fname="";
										$mname="";
										$lname="";
										$addr1="";
										$addr2="";
										$zip="";
										$city="";
										$state="";
										$phone="";
										$mobile="";
										$fax="";



$user=$_SESSION['furnitureuser'];

                    




									try {	
									

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

	
	<style>
	body {
    font-family: "Roboto",sans-serif;

}
</style>
	
	
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

</head><!--/head-->

<body onload="dis()">

		<header id="header"><!--header-->
		<?php include('header.html');?>
	</header><!--/header-->
<form name="info" id="info" action="updateacc.php" method="post">
	<section id="cart_items">
		<div class="container">
			<div class="register-req" style="margin-top:0px;">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->
			
			
			<div class="container">


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Order List</a></li>
    <li><a data-toggle="tab" href="#menu2">Bulk Order</a></li>
    <li><a data-toggle="tab" href="#home">Account Info</a></li>
  </ul>

  <div class="tab-content">

    <div id="menu1" class="tab-pane fade in active">
<div class="review-payment">
				<h2>Order Status</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed" style="border:none">
					<thead>
						<tr class="cart_menu">
							<td class="image">Orderno</td>
							<td class="description">Billing address</td>
							<td class="price">Note</td>
							<td class="quantity">Date</td>
							<td class="quantity">Details</td>
						</tr>
					</thead>
					<tbody>
												<?php
									
									

									$ntot=0;
									if(!isset($_GET['start']))
										$start=0;
									else
									$start=$_GET['start'];
									$lim=2;
                                    $nid=array();
									$cc=0;
                                    try {	
									

										$sql = $conn->prepare("SELECT * FROM po where user='$user' limit $start,$lim");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$id=$result["pono"];
										$nid[$cc]=$id;
										$cc++;
										$name=$result["address"];
										
		                                
										
										$path=$result["note"];
										$price=$result["date"];
										
										
														echo '<tr id="re'.$id.'">';
															echo '<td class="cart_product" style="border-top:none;">';
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
														echo '<td><p data-toggle="modal" data-target="#myModal'.$id.'"  style="cursor:pointer">View Details</p><br></td>';
														echo '</tr>';
														
														
														
			
														
														
														
														
														
														
														
														
														
										}		
										
														
									  	$sql = $conn->prepare("SELECT * FROM po where user='$user'");
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
                                               echo '<li><a href="account.php?start='.$new.'" class="active">'.$disp11.'</a></li>';											
											else	
								            echo '<li><a href="account.php?start='.$new.'">'.$disp11.'</a></li>';
											}
                   							echo '</ul>';
						                   echo '</div>';
											
											?>
											
											
											
																<?php
									
								
	
									
                                    try {	
									
                                        for($i=0;$i<$cc;$i++)
										{
											$cid=$nid[$i];
								
										$sql = $conn->prepare("SELECT * FROM podetails where pono='$cid'");
										$sql->execute();
																								
										echo'<div class="modal fade" id="myModal'.$nid[$i].'" role="dialog" style="top:20%">';
                                        echo '<div class="modal-dialog">';
    
     
                                         echo  '<div class="modal-content"  style="background-color:#01aab1">';
										echo '<div class="modal-header">';
										echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                                        echo ' <h4 class="modal-title">Odrder No:'.$nid[$i].'</h4>';
                                        echo '</div>';
										echo '<div class="modal-body">';
										$ntot=0;
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$id=$result["pono"];
										
										
										$name=$result["name"].'  ID:'.$result["id"];
										
		
										
										$path=$result["price"];
										$price=$result["quantity"];
										
										
							
									
										
									    
									    if($price>=5)
										{
												$sp = $path - ($path * (5 / 100));
																	
																	
																	
																	
												echo '<p><b>Name:&nbsp;</b>&nbsp;'.$name.'<b>&nbsp;&nbsp;Rate:   &nbsp;</b>Rs<strike>'.$path.'</strike>'.$sp.'<b>&nbsp;&nbsp;Quantity:</b>&nbsp;'.$price.'&nbsp;&nbsp;<b>Amount:&nbsp;</b>'.$sp*$price.'</p>';
												$ntot=$ntot+($sp*$price);
										}
										
										
										else
										{
												echo '<p><b>Name:&nbsp;</b>&nbsp;'.$name.'<b>&nbsp;&nbsp;Rate:   &nbsp;</b>'.$path.'<b>&nbsp;&nbsp;Quantity:</b>&nbsp;'.$price.'&nbsp;&nbsp;<b>Amount:&nbsp;</b>'.$path*$price.'</p>';
												$ntot=$ntot+($path*$price);
										}
										echo '<p><b>Total Amount:</b>'.$ntot.'</p>';
										
										}
											echo '</div>';
										echo '<div class="modal-footer">';
										echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
										echo '</div>';
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
    <div id="menu2" class="tab-pane fade">
  <div class="review-payment">
				<h2>Bulk Order</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed" style="border:none">
					<thead>
						<tr class="cart_menu">
							<td class="image">Orderno</td>
							<td class="description">Category</td>
							<td class="price">Sku</td>
							<td class="quantity">Quantity</td>
							<td class="description">Date</td>
						</tr>
					</thead>
					<tbody>
												<?php
									
									

									$ntot=0;
									if(!isset($_GET['start']))
										$start=0;
									else
									$start=$_GET['start'];
									$lim=2;
                                    $nid=array();
									$cc=0;
                                    try {	
									

										$sql = $conn->prepare("SELECT * FROM bulkorder where user='$user' limit $start,$lim");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$id=$result["id"];
										$nid[$cc]=$id;
										$cc++;
										$category=$result["category"];
										
		                                $date=$result["time"];
										
										$sku=$result["sku"];
										$qty=$result["qty"];
										
										
														echo '<tr id="re'.$id.'">';
															echo '<td class="cart_product" style="border-top:none;">';
															echo '<p>'.$id.'</p>';
															echo '</td>';
														
															echo '<td class="cart_price">';
															echo '<p>'.$category.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$sku.'</p>';
															echo '</td>';
															echo '<td class="cart_price">';
															echo '<p>'.$qty.'</p>';
															echo '</td>';
																echo '<td class="cart_price">';
															echo '<p>'.$date.'</p>';
															echo '</td>';
														echo '</tr>';
														
														
														
			
														
														
														
														
														
														
														
														
														
										}		
										
														
									  	$sql = $conn->prepare("SELECT * FROM bulkorder where user='$user'");
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
                                               echo '<li><a href="account.php?start='.$new.'" class="active">'.$disp11.'</a></li>';											
											else	
								            echo '<li><a href="account.php?start='.$new.'">'.$disp11.'</a></li>';
											}
                   							echo '</ul>';
						                   echo '</div>';
											
											?>
											
											
											
																
    </div>
    <div id="home" class="tab-pane fade">
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
										<label><input type="checkbox" id="enable" onclick="dis()">&nbsp;&nbsp;Edit Your address</label>
							</div>
							<div class="form-two">
									<select name="city">
										<option value="<?php echo $city;?>"><?php echo $city;?></option>

									</select>
									<select name="state">
										<option value="<?php echo $state;?>"><?php echo $state;?></option>

									</select>
									<input type="text" value="<?php echo $zip;?>" name="zip" />
									<input type="text" value="<?php echo $phone;?>" name="phone" />
									<input type="text" value="<?php echo $mobile;?>" name="mobile" />
									<input type="text" value="<?php echo $fax;?>" name="fax" />
															<button type="submit" class="btn btn-default pull-right" id="sub" style="background-color:orange;" enabled="enable">
											Save editing
										</button>
				</form>						
							</div>
						</div>
					</div>

				</div>
			</div>
    </div>
  </div>
</div>


	
				

										

  <!-- Modal -->
		
											

		</div>
	</section> <!--/#cart_items-->
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
 

	


	
  <link rel="stylesheet" href="pop/new3.css">
  <script src="pop/jquery.min.js"></script>
  <script src="pop/new3.css"></script>	
</body>
</html>