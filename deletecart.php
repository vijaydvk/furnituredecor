					<?php
					include('connection.php');
					session_start();
					$user=$_SESSION['furnitureuser'];
									$id=$_GET['q'];
								

                                    try {	
									
									
										$sql = $conn->prepare("delete from cart where webid='$id' and user='$user'");
										$sql->execute();
									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
					?>