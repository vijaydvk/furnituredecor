					<?php
					include('connection.php');
                    $name=$_POST["name"];
					$email=$_POST["email"];
					$question=$_POST["question"];
								

                                    try {	
									

										$sql = $conn->prepare("insert into faq(name,email,question,answer) values('$name','$email','$question','')");
										$sql->execute();
									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
															header('location:faq.php');
					?>