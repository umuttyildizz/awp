<?php
session_start();
$id = $_SESSION["enter"];
include('std/check.php');
include('std/dbconnect.php');

$stmt = 'SELECT * FROM works WHERE u_id = "'.$id.'" AND deleted = 0 AND state = 10;' ;

$res = mysql_query($stmt);

?>

<form action="user.php" method="post">
<input type="text" name="job" value="2" style="display: none"></input>
<table align="right" border="1px" style="width: 100%">
	<tr>
		<td align="center" style="width: 50%">ÝSTEK</td>
		<td align="center" style="width: 20%">BAÞLANGIÇ TARÝHÝ</td>
		<td align="center" style="width: 20%">DURUM</td>
		<td align="center" style="width: 10%">SEÇÝM</td>
	</tr>
	<?php
	while ($row = mysql_fetch_array($res)) {
		$state_id = selectControl($row[1]);
		$stmt1 = 'SELECT stateName FROM state_type WHERE id = "'.$state_id.'";' ;
		$state = mysql_query($stmt1);
		if($state = mysql_fetch_array($state))
		echo'<tr><td align="center" style="width:300px">';
		echo substr($row[6],0,50).'...';
		echo'</td><td align="center" style="width:99px">';
		echo $row[2];
		echo'</td><td align="center" style="width:99px">';
		echo $state[0];
		echo'</td><td align="center">';
		echo'<input type="radio" name="id" value="'.$row[0].'"/>';
		echo'</td></tr>';
	}

	function selectControl($state){
		if($state < 9 && $state > 6)
		$state = 5;
		return $state;
	}
	?>
	<tr>
		<td align="center" colspan="4">
			<input name="submit" type="submit" value="Düzenle"><input name="delete" id = "delete" type="button" value="Sil" onclick="submitDelete();"></input>
		</td>
	</tr>
</table>
	</form>