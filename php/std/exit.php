<?php ob_start();?>
<?php
include('check.php');
session_start();
$_SESSION["enter"] = '0';
header("Location:./../../index.php");

?>
<?php ob_flush();?>
