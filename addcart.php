<?php
 include('connection.php');
session_start();
$user=$_SESSION['furnitureuser'];

if( isset($_POST['id']) )
{
$id=$_POST["id"];
$submit=$_POST["submit"];
}
else
	
	{
		
	$id=$_GET["id"];
$submit=$_GET["submit"];
	}

if( isset($_POST['qty']) )
$qty=$_POST["qty"];
else
	$qty=1;



								




									try {	
									
									
										
										$sql = $conn->prepare("SELECT * FROM product where id='$id' ");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){											
										$result1=$result["path"];
										$new=addslashes($result1);
                                 		$name=$result["name"];
										$price=$result["price"];
										
								
										}
										
										if($submit=="cart")
											
										{
										
                                        $sql = $conn->prepare("SELECT * FROM cart where webid='$id' and user='$user' ");
										$sql->execute();
										$count=$sql->rowCount();
										
									    if($count==0)

										{
										$sql = $conn->prepare("insert into cart (webid,user,name,path,price,qty) values('$id','$user','$name','$new','$price','$qty')");
										$sql->execute();	
										}
										
										else
										{
											$new=$conn->prepare("SELECT * FROM cart where webid='$id' ");
											$new->execute();
										    while($nresult = $new->fetch(PDO::FETCH_ASSOC)){	
											$nqty=$nresult["qty"];
											}
											$nqty=$nqty+$qty;
											$new=$conn->prepare("update cart set qty='$nqty' where webid='$id' and user='$user' ");
											$new->execute();
										}
										
										}
										else
											
										{
										$sql = $conn->prepare("SELECT * FROM wishlist where webid='$id' and user='$user' ");
										$sql->execute();
										$count=$sql->rowCount();
										
									    if($count==0)

										{
										$sql = $conn->prepare("insert into wishlist (webid,user,name,path,price,qty) values('$id','$user','$name','$new','$price','$qty')");
										$sql->execute();	
										}
										
										else
										{
											$new=$conn->prepare("SELECT * FROM wishlist where webid='$id' ");
											$new->execute();
										    while($nresult = $new->fetch(PDO::FETCH_ASSOC)){	
											$nqty=$nresult["qty"];
											}
											$nqty=$nqty+$qty;
											$new=$conn->prepare("update wishlist set qty='$nqty' where webid='$id' and user='$user' ");
											$new->execute();
										}
												
										}

										

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}



//header("Location:index.php");

echo "<script>
             alert('Add to $submit Successfully done'); 
             window.history.go(-2);
     </script>";

?>