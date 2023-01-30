<?php
session_start();
if($_SESSION["enter"] == '0'){
	echo '<script LANGUAGE="JavaScript">';
  	echo 'window.location="./../../index.php";';
 	echo '</script>';
}

?>

