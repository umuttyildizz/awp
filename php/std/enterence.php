<?php ob_start();?>
<?php
error_reporting(0);
session_start();
include('dbconnect.php');


$name = $_POST["name"];
$password = $_POST["password"];
$stmt = 'SELECT * FROM user WHERE name = "'.$name.'" AND deleted = 0;' ;
$res = mysql_query($stmt);
if($row = mysql_fetch_row($res)){

	if($row[1] != null && $row[2] == $password){
		if($row[3] == '1'){
			$_SESSION["enter"] = -1;
			header("Location: ./../../admin.php");
		}else{
			$_SESSION["enter"] = $row[0];

			header("Location: ./../../user.php");
		}
	}else{
		$_SESSION["enter"] = 0;
		header("Location: ./../../index.php");
	}
}else{
	$_SESSION["enter"] = 0;
	header("Location: ./../../index.php");
}



?>
<?php ob_flush();?>