<?php
ob_start();
error_reporting(0);
include('dateHeader.php');
include('check.php');
$id = $_POST["id"];
include ('./dbconnect.php');
$stmt = 'UPDATE works set deleted = 1 ,LCDate = "'.date("Y-m-d H:i:s").'" WHERE id = '.$id.';';
echo mysql_query($stmt);
ob_flush();			
?>