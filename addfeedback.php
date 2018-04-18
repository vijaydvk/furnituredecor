<?php
session_start();
$user=$_SESSION['furnitureuser'];
$user="prakash";
$rat=4;
$note=$_POST["feedback"];
$name=$_POST["product"];
$id=$_POST["id"];


echo $note;
echo $name;
echo $id;

									$hostdb = 'localhost';
									$namedb = 'furnituredecor';
									$userdb = 'root';
									$passdb = '';




									try {	
									
										$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
										$conn->exec("SET CHARACTER SET utf8");    
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										
										$sql = $conn->prepare("insert into feedback (name,product,note,ratings,id) values('$user','$name','$note','$rat','$id')");
										$sql->execute();	
										}
										
										catch(PDOException $e) {
										echo $e->getMessage();
															}



//header("Location:index.php");

echo "<script>
             alert('Add to cart Successfully done'); 
             window.history.go(-1);
     </script>";

?>