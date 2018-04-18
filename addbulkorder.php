<?php
include('connection.php');
session_start();
$user= $_SESSION['furnitureuser'];
$category=$_POST['cat'];
$sku=$_POST['sku'];
$qty=$_POST['qty'];
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$cname=$_POST['cname'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$message=$_POST['message'];
			




									try {	
									
								
										
										$sql = $conn->prepare("INSERT INTO `bulkorder` (`id`, `category`, `sku`, `qty`, `name`, `email`, `contact`, `companyname`, `city`, `pincode`, `note`,`user`,`time`) VALUES (NULL, '$category', '$sku', '$qty','$name', '$email', '$contact', '$cname', '$city', '$pincode', '$message','$user',NOW())");
										$sql->execute();
										$poid=$conn->lastInsertId();								
										}
						    			catch(PDOException $e) {
										echo $e->getMessage();
															}

			echo "<script>
       alert('Order Confirmed Your order id Is:".$poid."'); 
         
     </script>";
header("location:bulkorder.php");	 



?>