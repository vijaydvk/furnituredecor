					<?php
					include('connection.php');
					session_start();
					$user=$_SESSION['furnitureuser'];
									$id=$_GET['q'];
								echo $id;
                                 
								 echo $user;
                                    try {	
									
										$sql = $conn->prepare("insert into cart select *from wishlist where webid='$id'");
										
																
										$sql->execute();
									
										$sql = $conn->prepare("delete from wishlist where webid='$id' and user='$user'");
										
																
										$sql->execute();
									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
					?>