<?php ob_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
<title>TicketSystem</title>
</head>
<body style="margin-top: 50px">
<?php
include('std/head.php');
include('std/check.php');
include('std/dbconnect.php');

$id = $_POST["id"];

$stmt = 'SELECT * FROM works WHERE id = "'.$id.'";' ;

$res = mysql_query($stmt);

if($row = mysql_fetch_array($res)){
		echo'<div align="center" width="602px"><form action="php/std/createTicket.php" method="post">';
		echo'<input type="text" name="id" value="'.$id.'" style="display: none"/>';
		echo'<table align="center" border="1px" style="width: 600px;">
			 <tr><td align="center" colspan="2">TALEP TAKİP FORMU</td></tr>';
		echo'<tr><td width="25%" align="center"> BAŞLANGIÇ TARİHİ</td>';
		echo'<td width="75%" align="center">'.$row[3].'</td></tr>';
		echo'<tr><td align="center">SON DEĞİŞİKLİK TARİHİ</td>';
		echo'<td align="center">'.$row[4].'</td></tr>';
		echo'<tr><td align="center">DURUMU</td>';
		echo'<td align="center">';
		select($row[1]);
		echo'</td></tr>';
		echo'<tr><td align="center">İSTEK</td>';
		echo'<td align="center">'.$row[7].'</td></tr>';
		echo'<tr><td align="center">YÖNETİCİ YORUMU</td>';
		echo'<td align="center">'.$row[5].'</td></tr>';
		echo'<tr><td align="center">KULLANICI YORUMU</td>';
		echo'<td align="center"><textarea name="commend" rows="7" cols="48" style="border: none">'.$row[6].'</textarea></td></tr>';
		echo'<tr><td align="center" colspan="2"><input type="submit" name="submit" value="EDIT"/></td></tr>';
		echo'</table>';
		echo'</form></div>';
}

function select($state){
	switch($state){
		case 1:
			echo'accept-start';
			break;
		case 2:
			echo 'accept-padding';
			break;
		case 3: 
			echo'<select name = "state">';
			echo'<option value="3">Red(Kabul edilemez)</option>';
			echo'<option value="7">Yeniden Aç</option>';
			echo'<option value="9">Kabul</option>';
			echo'</select>';
			break;
		case 4: 
			echo'<select name = "state">';
			echo'<option value="4">Red-Yetersiz bilgi</option>';
			echo'<option value="7">Yeniden Aç</option>';
			echo'<option value="9">Kabul</option>';
			echo'</select>';
			break;
		case 5:
			echo 'Beklemede';
			break;
		case 6:
			echo'<select name = "state">';
			echo'<option value="6">Tamamlandı</option>';
			echo'<option value="8">Red-Tamamlanmadı</option>';
			echo'<option value="9">Kabul</option>';
			echo'</select>';
			break;
		case 7:
			echo'Beklemede';
			break;
		case 8:
			echo'Beklemede';
			break;
		case 9:
			echo'Kabul Edildi';
			break;
		case 10:
			echo'<select name = "state">';
			echo'<option value="10">Kapalı</option>';
			echo'<option value="7">Yeniden Aç</option>';
			echo'</select>';
			break;
		default:
			echo'Yanlış';
			break;
	}	
		
}
?>
</body>
</html>
	<?php ob_flush();?>
