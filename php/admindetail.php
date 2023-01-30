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
			 <tr><td align="center" colspan="2">Ýstek Deðiþtirme</td></tr>';
		echo'<tr><td width="25%" align="center">Kullanýcý Adý</td>';
		echo'<td width="75%" align="center">'.$row['name'].'</td></tr>';
		echo'<tr><td align="center">Kullanýcý Tipi</td>';
		echo'<td align="center">'.userType($row['type']).'</td></tr>';
		echo'<tr><td align="center">Baþlangýç Tarihi</td>';
		echo'<td align="center">'.$row['SDate'].'</td></tr>';
		echo'<tr><td align="center">Son Deðiþim Tarihi</td>';
		echo'<td align="center">'.$row['LCDate'].'</td></tr>';
		echo'<tr><td align="center">Durum</td>';
		echo'<td align="center">';
		select($row['state']);
		echo'</td></tr>';
		echo'<tr><td align="center">Ýstek</td>';
		echo'<td align="center">'.$row['ticket'].'</td></tr>';
		echo'<tr><td align="center">Kullanýcý Yorumu</td>';
		echo'<td align="center">'.$row['usrCom'].'</td></tr>';
		echo'<tr><td align="center">Yönetici Yorumu</td>';
		echo'<td align="center"><textarea name="commend" rows="7" cols="45">'.$row['admCom'].'</textarea></td></tr>';
		echo'<tr><td align="center" colspan="2"><input type="submit" name="submit" value="Deðiþtir"/></td></tr>';
		echo'</table>';
		echo'</form>';
	}
}


function select($state){
	echo'<select name = "state">';
	switch($state){
		case 1:
			echo '<option value="1">Onaylandý-Baþlandý</option>';
			echo '<option value="6">Tamamlandý</option>';
			break;
		case 2:
			echo '<option value="2">Onaylandý-Beklemede</option>';
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
			echo '<option value="1">Onaylandý-Baþlandý</option>';
			echo '<option value="2">Onaylandý-Beklemede</option>';
			echo '<option value="3">Red(Kabul edilemez)</option>';
			echo '<option value="4">Red(Yetersiz bilgi)</option>';
			break;
		case 6:
			echo '<option value="6">Tamamlandý</option>';
			break;
		case 7:
			echo '<option value="7">Yeniden Açýldý</option>';
			echo '<option value="1">Onaylandý-Baþlandý</option>';
			echo '<option value="2">Onaylandý-Beklemede</option>';
			echo '<option value="3">Red(Kabul edilemez)</option>';
			echo '<option value="4">Red(Yetersiz bilgi)</option>';
			break;
		case 8:
			echo '<option value="8">Red(Tamamlanmadý)</option>';
			echo '<option value="1">Onaylandý-Baþlandý</option>';
			echo '<option value="2">Onaylandý-Beklemede</option>';
			break;
		case 9:
			echo '<option value="9">Onaylandý</option>';
			echo '<option value="10">Kapandý</option>';
			break;
		case 10:
			echo '<option value="10">Kapandý</option>';
			break;
		default:
			echo'<option value="0">Durum hatasý</option>';
			break;
	}	
	echo'</select>';	
}
ob_flush();
?>
