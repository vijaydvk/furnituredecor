<!DOCTYPE html>
<?php

session_start(); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reviews | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->

<body>
		<header id="header"><!--header-->
				<?php include('header.html');?>
	</header>
	
<!--form-->
		<div class="container">
		<table>
					<?php
									
									
									 include('connection.php');

                                    if(!isset($_GET['start']))
										$start=0;
									else
									$start=$_GET['start'];
									$lim=4;


									try {	
									
										
										$sql = $conn->prepare("SELECT * FROM feedback");
										$sql->execute();
										
										$count=$sql->rowCount();
										
										$page=$count/$lim;
										
										$float = floatval($page); //Convert the string to a float
                                        if($float && intval($float) != $float) // Check if the converted int is same as the float value...
                                        {
                                          $page=$page+1;
                                        }
										
							            $sql = $conn->prepare("SELECT * FROM feedback limit $start,$lim");
										$sql->execute();
										
										
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
									     $result1=$result["name"];	
										$id=$result["id"];
										$prod=$result["product"];
										$note=$result["note"];
										$rat=$result["ratings"];
										echo "<tr><td>";
										echo "<b>Name:</b>".$result1;
										echo "<br><b>Web Id:</b>".$id;
										echo "<br><b>Product Name:</b>".$prod;
										echo "</td><td>";
										
										 $sql1 = $conn->prepare("SELECT path FROM product where id=$id");
										$sql1->execute();
										
										
										while($rresult = $sql1->fetch(PDO::FETCH_ASSOC)){
										
												$result123=$rresult["path"];				
										 echo "<img src='".$result123."' height='228' width='328'/></td><td>";
										}
										echo "<br><b>Review:</b>".$note;
										echo "<br><b>Ratings:</b>".$rat;
										echo "</td></tr>	";													
											
										}
									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
															
									
									?>
									</table>
									<?php
										$page=intval($page);
									    echo '<div class="pagination-area">';
							            echo '<ul class="pagination">';
											for($i=0;$i<$page;$i++)
											{
												$new=$lim*$i;
												$disp11=$i+1;
												
												$ac=$start/$lim;
												$ac=$ac+1;
												
                                            if($disp11==$ac)
                                               echo '<li><a href="reviews.php?start='.$new.'" class="active">'.$disp11.'</a></li>';											
											else	
								            echo '<li><a href="reviews.php?start='.$new.'">'.$disp11.'</a></li>';
											}
                   							echo '</ul>';
						                   echo '</div>';
											
											?>
				
		</div>
<!--/form-->
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>