<?php
 include('connection.php');
session_start();
$user=$_SESSION['furnitureuser'];
$addr="Name:";
$addr=$addr.$_POST['fname'].$_POST['mname'].$_POST['lname'];
$addr=$addr."<br>";
$addr=$addr."Address:";
$addr=$addr.$_POST['addr1'].','.$_POST['addr2'].','.$_POST['city'].','.$_POST['state'];
$addr=$addr.'<br>Pincode'.$_POST['zip'].'<br>Phone:'.$_POST['phone'].'Mobile:'.$_POST['mobile'].'Fax:'.$_POST['fax'];

$note=$_POST['message'];





									try {	
									
																	
										$sql = $conn->prepare("INSERT INTO `po` (`pono`, `address`, `user`, `note`, `date`) VALUES (NULL, '$addr', '$user', '$note', NOW())");
										$sql->execute();
										$poid=$conn->lastInsertId();
										
						
										    $new=$conn->prepare("SELECT * FROM cart where user='$user' ");
											$new->execute();
										    while($nresult = $new->fetch(PDO::FETCH_ASSOC)){	
											$name=$nresult["name"];
											$id=$nresult["webid"];
											$path=$nresult["path"];
											$price=$nresult["price"];
											$quantity=$nresult["qty"];	
							
									    $sql = $conn->prepare("INSERT INTO `podetails` (`pono`, `path`, `name`, `id`, `price`, `quantity`) VALUES ('$poid', '$path', '$name', '$id', '$price', '$quantity')");
										$sql->execute();
											
											
											}
								        $sql = $conn->prepare("delete from cart where user='$user'");
										$sql->execute();
											

										
								
										}

									catch(PDOException $e) {
										echo $e->getMessage();
															}



//header("Location:index.php");

echo "<script>
       alert('Order Confirmed Your order id Is:".$poid."'); 
         
     </script>";
	  header('Location:account.php');

?>