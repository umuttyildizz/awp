<?php

	$dbHost = '213.142.141.141:3306';
	$dbUser = 'cgnyazilim';
	$dbPass = '07080910';
	$dbName = 'cgnnetw';
	$db = NULL;


	$db=mysql_connect( $dbHost, $dbUser, $dbPass );
	mysql_query("SET NAMES 'latin5' COLLATE 'latin5_turkish_ci'"); 
	mysql_query("SET CHARACTER SET latin5"); 
	mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");
	mysql_select_db($dbName);
	

	
?>
