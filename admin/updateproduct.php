<?php
							    include('connection.php');
									
						
                                 $id=$_GET['q'];

                                 $val=$_GET['p'];

									try {	
									
			
										$sql = $conn1->prepare("update product set visble='$val' where id='$id'");
										$sql->execute();
								

									}
									
									catch(PDOException $e) {
										echo $e->getMessage();
															}
															
									
									?>