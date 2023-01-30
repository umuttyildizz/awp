<?php
ob_start();
error_reporting(0);
include('check.php');
$id = $_POST["id"];
include ('./dbconnect.php');
$stmt = 'UPDATE user set deleted = 1 WHERE id = '.$id.';';
echo mysql_query($stmt);
ob_flush();			
?>