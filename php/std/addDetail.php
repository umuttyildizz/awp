<?php ob_start();?>
<?php
include('dateHeader.php');
include('check.php');
include('dbconnect.php');
$id = $_POST["id"];
$state = $_POST["state"];
$commend = $_POST["commend"];
$stmt = 'UPDATE works set LCDate = "'.date("Y-m-d H:i:s").'",admCom ="'.$commend.'",state ='.$state.' WHERE id='.$id.';';
mysql_query($stmt);
header('Location:./../../admin.php');
?>
<?php ob_flush();?>