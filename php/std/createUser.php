<?php
ob_start();
include ('head.php');
include ('check.php');
include ('dbconnect.php');

$name = $_POST["name"];
$pass = $_POST["password"];
$type = $_POST["type"];

$stmt = 'INSERT into user (name, pass, type, deleted) VALUES ("'.$name.'","'.$pass.'",'.$type.',0);';


mysql_query($stmt);

header("Location:./../../admin.php");
ob_flush();
?>