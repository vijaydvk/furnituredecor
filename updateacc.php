<?php
session_start();
$user=$_SESSION['furnitureuser'];

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$addr1=$_POST['addr1'];
$addr2=$_POST['addr2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$fax=$_POST['fax'];


								




									try {	
									
									
										
										$sql = $conn->prepare("UPDATE `customer` SET  `firstname` = '$fname',`middlename` = '$mname', `lastname` = '$lname', `addr1` = '$addr1', `addr2` = '$addr2', `zip` = '$zip',`city` = '$city', `state` = '$state', `phone` = '$phone', `mobile` = '$mobile', `fax` = '$fax' WHERE `display` = '$user'");
										$sql->execute();
													
								
										}

									catch(PDOException $e) {
										echo $e->getMessage();
															}



//header("Location:index.php");

echo "<script>
       alert('Account updated'); 
          window.history.go(-1);
     </script>";

?>