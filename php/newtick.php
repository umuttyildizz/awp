<?php ob_start();?>
<?php 
include('std/check.php');
?>
<form action="php/std/createTicket.php" method="post">
<table  align="left" border="0px" style="width: 60%; margin-left:10%">
	<tr height = "50px">
		<td align="center" colspan="2">YENÝ TALEP OLUÞTUR</td>
	</tr>
	<tr>
		<td style="width: 25%" align="center">ÝSTEK:</td>
			<td style="width: 75%"><textarea name="tick" rows="5" cols="50" style="border: 1 solid"></textarea>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<input name="submit" type="submit" value="GÖNDER"></input>
		</td>
	</tr>
</table>
</form>
<?php ob_flush();?>