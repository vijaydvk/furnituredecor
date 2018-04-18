<?php

	$hostdb = '182.50.133.90:3306';
	$namedb = 'furnituredecor';
	$userdb = 'decor';
	$passdb = 'decor123';
	
	$conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
	$conn->exec("SET CHARACTER SET utf8");    
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>