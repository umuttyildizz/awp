<?php ob_start(); ?>
<?php
error_reporting(0);
session_start();
include 'check.php';
$id = $_SESSION["enter"];
include('dbconnect.php');
$body = $_POST["tick"];
$commend = $_POST["commend"];
$state = $_POST["state"];
$tick_id = $_POST["id"];

include('dateHeader.php');


if($body != null){
	$stmt = 'INSERT INTO works (state,SDate,LCDate,ticket,u_id,deleted) VALUES (5,"'.date("Y-m-d H:i:s").'","'.date("Y-m-d H:i:s").'","'.$body.'",'.$id.',0);';
}if($tick_id != null){
	if($state != null){
		$stmt = 'UPDATE works set SDate = "'.date("Y-m-d H:i:s").'",LCDate = "'.date("Y-m-d H:i:s").'",usrCom ="'.$commend.'",state ='.$state.' WHERE id='.$tick_id.';';
	}else{
		$stmt = 'UPDATE works set SDate = "'.date("Y-m-d H:i:s").'",LCDate = "'.date("Y-m-d H:i:s").'",usrCom ="'.$commend.'" WHERE id='.$tick_id.';';
	}
}



mysql_query($stmt);


header("Location: ./../../user.php");



ob_flush();
?>