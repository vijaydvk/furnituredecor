<?php
$price=$_POST["price"];
$qty=$_POST["qty"];
$category=$_POST["cat"];
$category=str_replace(" ","",$category);
$target_dir = $category."/";
$det=$_POST["details"];
$name=$_POST["name"];
$id=$_POST["id"];
$img=$_POST["nimage"];
$chkimage=$_FILES['image']['name'];
if($chkimage!="")
{




try {
  
        $conn = new mysqli('localhost', 'root', '', 'bug');

         if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
}
		catch(PDOException $e) {
  echo $e->getMessage();
}


        $name = $conn->real_escape_string($_FILES['image']['name']);
        $mime = $conn->real_escape_string($_FILES['image']['type']);
		$variable = $conn->real_escape_string($det);
	    $target1 = $target_dir.$name;	
        move_uploaded_file( $_FILES['image']['tmp_name'], $target1);
	   
	   $target="admin/".$target1;


	   

				include('connection.php');
	   
	   
	   
									try {	
									
								
										
										$sql = $conn1->prepare("update product set price='$price',stock='$qty',details='$det',name='$name',path='$target' where id='$id'");
										$sql->execute();
													
								
										}

									catch(PDOException $e) {
										echo $e->getMessage();
															}
									unlink($img);
									header("Location:product.php");
}															
else
{
	include('connection.php');
	   
	   
	   
									try {	
									
								
										
										$sql = $conn1->prepare("update product set price='$price',stock='$qty',details='$det',name='$name' where id='$id'");
										$sql->execute();
													
								
										}

									catch(PDOException $e) {
										echo $e->getMessage();
															}
									header("Location:product.php");	
}


?> 