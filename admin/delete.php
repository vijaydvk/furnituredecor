<?php

$id=$_GET["id"];

	include('connection.php');
	   
	   
	   
									try {	
									
								
										
										$sql = $conn1->prepare("delete from po where pono='$id'");
										$sql->execute();
											$sql = $conn1->prepare("delete from podetails where pono='$id'");
										$sql->execute();
													
								
										}

									catch(PDOException $e) {
										echo $e->getMessage();
															}
									header("Location:product.php");	
									
									
?>

