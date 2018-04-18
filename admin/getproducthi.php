<?php
									 include('connection.php');
									
						
                                 $id=$_GET['q'];



									try {	
									
			
										$sql = $conn1->prepare("SELECT * FROM product where category='$id' and visble='1'");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result1=$result["path"];	
										$id=$result["id"];
										$price=$result["price"];
										$disp=$result["name"];
										$resultee = substr($disp, 0, 20);
										$disp=$resultee.'-'.$result["category"];
										echo '<div class="col-sm-4">';
							            echo '<div class="product-image-wrapper">';
								        echo '<div class="single-products">';
										echo '<div class="productinfo text-center">';
									    $new123=str_replace("admin/","",$result1);
																		
										 echo "<img src='".$new123."' height='228' width='328'/>";
									    
										//echo '<img src="'$result1'" alt="" />';
										echo '<h2>₹'.$price.'</h2>';
										echo '<p >'.$disp.'</p>';
									
										echo '</div>';
								        echo '</div>';
								        echo '<div class="choose">';
									    echo '<ul class="nav nav-pills nav-justified">';
								
		                                echo '<li onclick="rem('.$id.','.'0'.')" style="cursor:pointer"><a><i class="fa fa-plus-square"></i><p id="sa'.$id.'">Show</p></a></li>';
										echo '<li><a href="editproduct.php?id='.$id.'"><i class="fa fa-plus-square"></i>Edit</a></li>';
									    echo '</ul>';
								        echo '</div>';
							            echo '</div>';
						                echo '</div>';
											
											
											
											
											
											
										
											
																			
											
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>