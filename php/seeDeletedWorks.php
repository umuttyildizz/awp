<?php ob_start();?>

<?php
include('php/std/check.php');
include ('php/std/userType.php');
$stmt = 'SELECT
    		works.LCDate
    		, user.name
    		, user.type
    		, state_type.stateName
    		, works.SDate
    		, works.id
		FROM
   		 	works
    	INNER JOIN state_type 
    	    ON (works.state = state_type.id)
    	INNER JOIN user 
    	    ON (works.u_id = user.id)
    	WHERE
    	    works.deleted=1;' ;

$res = mysql_query($stmt);

?>
<form action="admin.php" method="post">
<table style="width: 850px" align="center" border="1px">
	<tr>
		<td style="width: 200px" align="center">KULLANICI ADI</td>
		<td style="width: 50px" align="center">KATEGOR�</td>
		<td style="width: 190px" align="center">�� DURUMU</td>
		<td style="width: 180px" align="center">BA�LANGI� TAR�H�</td>
		<td style="width: 180px" align="center">SON DE����M TAR�H�</td>
		<td style="width: 50px" align="center">SE��M</td>
	</tr>
	<?php
	while ($row = mysql_fetch_array($res)) {
		echo'<tr><td align="center">';
		echo $row[1];
		echo'</td><td align="center">';
		echo userType($row[2]);
		echo'</td><td align="center">';
		echo $row[3];
		echo'</td><td align="center">';
		echo $row[4];
		echo'</td><td align="center">';
		echo $row[0];
		echo'</td><td align="center">';
		echo'<input type="radio" name="id" value="'.$row[5].'"/>';
		echo'</td></tr>';
	}
	?>
	<tr>
		<td align="center" colspan="6"><input type="submit" name="submit"
			value="DE���T�R" /></td>
	</tr>
</table>
</form>
<?php ob_flush();?>
