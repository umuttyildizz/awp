<?php ob_start(); ?>
<?php
include('std/head.php');
include ('std/userType.php');
session_start();

$admin = $_SESSION["enter"];
if($admin != -1){
	header("Location:/CGNTicketSystem/admin.php");
}else{
	include('std/dbconnect.php');
	
	$stmt = 'SELECT
    works.*
    , user.name
    , user.type
    , state_type.stateName
FROM
    works
    INNER JOIN state_type 
        ON (works.state = state_type.id)
    INNER JOIN user 
        ON (works.u_id = user.id)
WHERE
    works.id = '.$id.';';

	$res = mysql_query($stmt);
	
	
	if($row = mysql_fetch_array($res)){
		echo'<form action="php/std/addDetail.php" method="post">';
		echo'<input type="text" name="id" value="'.$id.'" style="display: none"/>';
		echo'<table align="center" border="1px" style="width: 600px;">
			 <tr><td align="center" colspan="2">�stek De�i�tirme</td></tr>';
		echo'<tr><td width="25%" align="center">Kullan�c� Ad�</td>';
		echo'<td width="75%" align="center">'.$row['name'].'</td></tr>';
		echo'<tr><td align="center">Kullan�c� Tipi</td>';
		echo'<td align="center">'.userType($row['type']).'</td></tr>';
		echo'<tr><td align="center">Ba�lang�� Tarihi</td>';
		echo'<td align="center">'.$row['SDate'].'</td></tr>';
		echo'<tr><td align="center">Son De�i�im Tarihi</td>';
		echo'<td align="center">'.$row['LCDate'].'</td></tr>';
		echo'<tr><td align="center">Durum</td>';
		echo'<td align="center">';
		select($row['state']);
		echo'</td></tr>';
		echo'<tr><td align="center">�stek</td>';
		echo'<td align="center">'.$row['ticket'].'</td></tr>';
		echo'<tr><td align="center">Kullan�c� Yorumu</td>';
		echo'<td align="center">'.$row['usrCom'].'</td></tr>';
		echo'<tr><td align="center">Y�netici Yorumu</td>';
		echo'<td align="center"><textarea name="commend" rows="7" cols="45">'.$row['admCom'].'</textarea></td></tr>';
		echo'<tr><td align="center" colspan="2"><input type="submit" name="submit" value="De�i�tir"/></td></tr>';
		echo'</table>';
		echo'</form>';
	}
}


function select($state){
	echo'<select name = "state">';
	switch($state){
		case 1:
			echo '<option value="1">Onayland�-Ba�land�</option>';
			echo '<option value="6">Tamamland�</option>';
			break;
		case 2:
			echo '<option value="2">Onayland�-Beklemede</option>';
			echo '<option value="1">accept-start</option>';
			break;
		case 3: 
			echo '<option value="3">Red(Kabul edilemez)</option>';
			break;
		case 4: 
			echo '<option value="4">Red(Yetersiz bilgi)</option>';
			break;
		case 5:
			echo '<option value="5">Beklemede</option>';
			echo '<option value="1">Onayland�-Ba�land�</option>';
			echo '<option value="2">Onayland�-Beklemede</option>';
			echo '<option value="3">Red(Kabul edilemez)</option>';
			echo '<option value="4">Red(Yetersiz bilgi)</option>';
			break;
		case 6:
			echo '<option value="6">Tamamland�</option>';
			break;
		case 7:
			echo '<option value="7">Yeniden A��ld�</option>';
			echo '<option value="1">Onayland�-Ba�land�</option>';
			echo '<option value="2">Onayland�-Beklemede</option>';
			echo '<option value="3">Red(Kabul edilemez)</option>';
			echo '<option value="4">Red(Yetersiz bilgi)</option>';
			break;
		case 8:
			echo '<option value="8">Red(Tamamlanmad�)</option>';
			echo '<option value="1">Onayland�-Ba�land�</option>';
			echo '<option value="2">Onayland�-Beklemede</option>';
			break;
		case 9:
			echo '<option value="9">Onayland�</option>';
			echo '<option value="10">Kapand�</option>';
			break;
		case 10:
			echo '<option value="10">Kapand�</option>';
			break;
		default:
			echo'<option value="0">Durum hatas�</option>';
			break;
	}	
	echo'</select>';	
}
ob_flush();
?>
