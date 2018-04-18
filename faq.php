<!DOCTYPE html>
<?php

session_start(); ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FAQ | E-Shopper</title>
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


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">FAQ’s</a></li>
    <li><a data-toggle="tab" href="#menu2">Ask Question</a></li>

  </ul>

  <div class="tab-content">

       <div id="home" class="tab-pane fade in">
     		<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-5 clearfix">
				home
					</div>

				</div>
			</div>
    </div>
	
	       <div id="menu2" class="tab-pane fade in">
     		<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-5 clearfix">
			<div class="container">
			<div class="row"><p style="padding-left:16px">Ask question and get answered by expert regarding products</p>
				<div class="col-sm-4 col-sm-offset-1" style="margin-left:0%">
					<div class="login-form"><!--login form-->
						
						<form action="addfaq.php" method="post">
							<input type="text" placeholder="Name" name="name"  />
							<input type="email" placeholder="Email" name="email" />
						
					</div><!--/login form-->
				</div>
			</div>
				<textarea placeholder="Question" name="question" rows="5" cols="200" ></textarea><br><p></p>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
		</div><br><br>
					</div>

				</div>
			</div>
    </div>

	       <div id="menu1" class="tab-pane fade in active">
     		<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8 clearfix">
			<?php
									
									

						
                                    try {	
									
                                        include('connection.php');
										$sql = $conn->prepare("SELECT * FROM faq");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC))
										{
											
										$name=$result["name"];
										$question=$result["question"];
										$ans=$result["answer"];
										echo "<b>Name:</b>".$name."&emsp;";
										echo "<b>Question:</b>".$question."&emsp;";
										echo "<b>Answer:</b>".$ans."<br>";
														
														
			
														
														
														
														
														
														
														
														
														
										}		
										
														
									/*  	$sql = $conn->prepare("SELECT * FROM po where user='$user'");
										$sql->execute();
										
										$count=$sql->rowCount();
										
										$page=$count/$lim;
										
										$float = floatval($page); //Convert the string to a float
                                        if($float && intval($float) != $float) // Check if the converted int is same as the float value...
                                        {
                                          $page=$page+1;
                                        }*/
										
										}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									
						?>
					</div>

				</div>
			</div>
    </div>

</div>

</div>
	
	<!--/form-->
	<footer id="footer">		
	<?php include('footer.html');?>
	</footer><!--/Footer-->
	
  <link rel="stylesheet" href="pop/new3.css">
  <script src="pop/jquery.min.js"></script>
  <script src="pop/new3.css"></script>	
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>