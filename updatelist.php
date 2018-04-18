					<?php
					include('connection.php');
					session_start();
					$user=$_SESSION['furnitureuser'];
									$qty=$_GET['p'];
									$id=$_GET['q'];
								

                                    try {	
									

										$sql = $conn->prepare("update wishlist set qty='$qty' where webid='$id' and user='$user'");
										$sql->execute();
									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
					?>