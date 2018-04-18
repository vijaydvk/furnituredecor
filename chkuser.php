<?php
session_start();
$user= $_SESSION['furnitureuser'];

$name=$_POST['name'];
$pass=$_POST['pass'];


 include('connection.php');




									try {	
									
										$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
										$conn->exec("SET CHARACTER SET utf8");    
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$sql = $conn->prepare("SELECT display FROM customer where display='$name' and pass='$pass'");
										$sql->execute();
										$count=$sql->rowCount();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
                                        $sql1 = $conn->prepare("update cart set user='$name' where user='$user'");
										$sql1->execute();
										$_SESSION['furnitureuser']=$name;
										$_SESSION['loggedin']="true";	
										}
									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
															
															
															if($count==0)
															{
																echo "<script>alert('No Match Found');</script>";
																header("Location:login.php?no=true");
															}
else
	echo "<script>
      
             window.history.go(-2);
     </script>";

?>