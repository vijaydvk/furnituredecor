<?php
$price=$_POST["price"];
$stock=$_POST["stock"];
$simage=$_POST["cat"];
$target_dir = $simage."/";
$det=$_POST["details"];


if($simage=="dinningtables")
	$asimage="dinning tables";
else if($simage=="dinningchairs")
	$asimage="dinning chairs";
else if($simage=="coffeetables")
	$asimage="coffee tables";
else if($simage=="workstationchairs")
	$asimage="workstation chairs";
else if($simage=="visitorschairs")
	$asimage="visitors chairs";
else if($simage=="executivechairs")
	$asimage="executive chairs";
else
	$asimage="sofas";
//echo $target_dir;

$target_file = basename($_FILES["path"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
try {
  
        $conn = new mysqli('localhost', 'root', '', 'bug');

         if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
}
		catch(PDOException $e) {
  echo $e->getMessage();
}


        $name = $conn->real_escape_string($_FILES['path']['name']);
        $mime = $conn->real_escape_string($_FILES['path']['type']);
		$variable = $conn->real_escape_string($det);
	    $target = $target_dir.$name;	
        move_uploaded_file( $_FILES['path']['tmp_name'], $target);
	   
	   $target="admin/".$target;
	   

	   
	   							include('connection.php');
	   
	   
	   
									try {	
									
								      
										
										$nname=str_replace(".jpg","",$name);
									    $sql = $conn1->prepare("select *from product where name='$nname' ");
										$sql->execute();
										$count = $sql->rowCount();
										if($count>0)
										{
											echo "<script>
                                            alert('Product Already Exist'); 
                                            
                                            </script>";
											header("Location:product.php");
										}
										else
										{
										$sql = $conn1->prepare("INSERT INTO product(id,name,path,category,price,stock,details,visble,sucat) VALUES (NULL,'$nname', '$target', '$asimage','$price','$stock','$variable','0','0')");
										$sql->execute();
										header("Location:product.php");
										}
													
								
										}

									catch(PDOException $e) {
										echo $e->getMessage();
															}
									


?> 