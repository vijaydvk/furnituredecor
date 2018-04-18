<?php
include('connection.php');
session_start();
$user= $_SESSION['furnitureuser'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$addr1=$_POST['addr1'];
$addr2=$_POST['addr2'];
$state=$_POST['state'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$ph=$_POST['ph'];
$mph=$_POST['mph'];		
$fax=$_POST['fax'];	
									




									try {	
									
								
										
										$sql = $conn->prepare("INSERT INTO `customer` (`display`, `email`, `pass`, `firstname`, `middlename`, `lastname`, `addr1`, `addr2`, `zip`, `city`, `state`, `phone`, `mobile`, `fax`) VALUES ('$name', '$email', '$pass', '$fname', '$mname', '$lname', '$addr1', '$addr2', '$zip', '$city', '$state', '$ph', '$mph', '$fax')");
										$sql->execute();
										$sql1 = $conn->prepare("update cart set user='$name' where user='$user'");
										$sql1->execute();
										$_SESSION['furnitureuser']=$name;										
										}
						    			catch(PDOException $e) {
										echo $e->getMessage();
															}
header("location:login.php");
									



?>