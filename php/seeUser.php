<?php ob_start();?>
<?php
include('php/std/head.php');
include ('php/std/check.php');
include ('php/std/dbconnect.php');
include ('php/std/userType.php');


$stmt = 'SELECT * FROM user Where deleted=0;';
$res = mysql_query($stmt);
include('./JS/admin.js');
?>
<table style="width: 800px" align="center" border="1px">
	<tr>
		<td style="width: 200px" align="center">KULLANICI ADI</td>
		<td style="width: 50px" align="center">KATEGORÝ</td>
		<td style="width: 100px" align="center">ÞÝFRESÝ</td>
		<td style="width: 199px" align="center">SÝLÝNME DURUMU</td>
		<td style="width: 50px" align="center">SEÇÝM</td>
	</tr>
	<?php
	while ($row = mysql_fetch_array($res)) {
		echo'<tr><td align="center">';
		echo $row[1];
		echo'</td><td align="center">';
		echo userType($row[3]);
		echo'</td><td align="center">';
		echo $row[2];
		echo'</td><td align="center">';
		echo deletedState($row[4]);
		echo'</td><td align="center">';
		echo'<input type="radio" name="id" value="'.$row[0].'"/>';
		echo'</td></tr>';
	}

	function deletedState($state){
		if($state == 0) return 'Onaylý';
		else return 'Silinmiþ';

	}
	?>
	<tr>
		<td align="center" colspan="5">
			<form action="admin.php" method="post">
				<input name="delete" id="delete" type="button" value="Sil" onclick="submitDelete();"></input>
				<input type="text" name="job" value="5" style="display: none"/>
				<input type="submit" name="submit" value="Tüm Kullanýcýlarý Gör"/>
			</form>
		</td>
	</tr>
</table>
<?php ob_flush();?>

