<?php

	$hostdb = '182.50.133.90:3306';
	$namedb = 'furnituredecor';
	$userdb = 'decor';
	$passdb = 'decor123';
	
	$conn1 = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
	$conn1->exec("SET CHARACTER SET utf8");    
	$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>