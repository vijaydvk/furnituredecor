
											<?php
									
									
								include('connection.php');

                                    $id=$_GET['q'];

									try {	
									
									
										$sql = $conn->prepare("SELECT * FROM product where id='$id' ");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$result123=$result["path"];	
										$id=$result["id"];
										$name=$result["name"];
										$cate=$result["category"];
										$price=$result["price"];
										$qty=$result["stock"];
										$deta=	$result["details"];		
										
										echo '<div class="col-sm-7"><form action="addcart.php" method="post">';
							            echo '<div class="product-information">';
								        echo '<h2>Category:'. $cate.'</h2>';
								        echo '<h5 id="txt">Product name:'.$name.'</h5>';
								        echo '<p>Web ID: <input style="border:none;" id="id" type="text" name="id" value="'.$id.'"><img src="images/product-details/rating.png" alt="" /></p>';
								        echo '<span>';
									    echo '<span>RS ₹'.$price.'</span>';
									    echo '<label>Quantity:</label>';
									    echo '<input type="text" value="1" name="qty" /><br>';
									    echo '<button type="submit" class="btn btn-fefault cart" name="submit" value="cart">';
										echo '<i class="fa fa-shopping-cart"></i>';
										echo 'Add to Cart';
									    echo '</button>&emsp;';
									    echo '<button type="submit" class="btn btn-fefault cart" name="submit" value="list">';
										echo '<i class="fa fa-star"></i>';
										echo 'Add to wishlist';
									    echo '</button>';
										echo '<div tabindex="-1" class="modal fade" id="myModal" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel" style="padding-left:10px;">';
                                        echo '<img src="'.$result123.'" alt="" height="600px" width="1024px" id="max" style="margin: 0;position: absolute;top: 50%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%)">';
                                        echo '</div>';
								        echo '</span>';
								        echo '<p><b>Product Details:</b></p><p>'.nl2br($deta).'</p>';
								        echo '<p style="color:orange"><b>Note:</b></p>';
								        echo '<p>Payment : Cash On delivery(Deliverd max of 10 days)</p>';
								        echo '<p>**Shipping Charges </b>May apply outside Tamilnadu.</p>';
								        echo '<p>Place More than 5 quantity Get 5% Discount on all Products</p>';
         								echo '</form>';
							            echo '</div>';
						                echo '</div>';							
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
									?>