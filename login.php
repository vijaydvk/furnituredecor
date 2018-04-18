<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION["loggedin"]))
{
	echo "<script>
             alert('You are Already Logged in');
             window.history.go(-1);
     </script>";
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
		<header id="header"><!--header-->
			<?php include('header.html');?>
	</header><!--header-->
	
	<section id="form" style="margin-top:5px;"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1" style="margin-left:0px;">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="chkuser.php" method="post">
							<input type="text" placeholder="Name" name="name" required  />
							<input type="password" placeholder="Password" name="pass"  required/>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
						<?php if(isset($_GET["no"])) echo "Check your Username and Password";?>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="customerdetails.php" method="post">
							<input type="text" placeholder="Account Name"/ name="name" required>
							<input type="email" placeholder="Email Address" name="email" required/>
							<input type="password" placeholder="Password" name="password" required/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
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