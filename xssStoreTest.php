<?php ob_start(); ?>
<?php
error_reporting(0);
session_start();
include ('user.php');
include('dbconnect.php');
$url = $_POST["url"];
$item='aresservis.com';
$command = escapeshellcmd("python umut/xss_stored.py " .$url);
shell_exec($command);
echo $command;
//echo $output;
//header("location : user.php");
//echo "çalıştı";
//
?>