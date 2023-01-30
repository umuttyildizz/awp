
<?php ob_start();?>

<?php
$temp =  $_POST['id'];
include 'std/dbconnect.php';
$str= '	SELECT count(works.id) FROM works';
$res = mysql_query($str);
$i = 0;
if($row = mysql_fetch_array($res)){
	if($row[0] > $temp){
			echo'1';
	}

}
?>		
<?php ob_flush();?>