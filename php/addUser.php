<?php ob_start();?>
<?php include('std/check.php');?>
<form action="php/std/createUser.php" method="post">
<table style="width: 400px" align="center">
	<tr>
		<td colspan="2" height="100px">KULLANICI EKLE</td>
	</tr>
	<tr>
		<td>Kullanýcý Adý:</td>
		<td><input type="text" name="name"></input></td>
	</tr>
	<tr>
		<td>Þifre :</td>
		<td><input type="text" name="password"></input></td>
	</tr>
	<tr>
		<td>Kullanýcý Kategorisi :</td>
		<td><select name="type">
			<option value="1">Admin Kullanýcý</option>
			<option value="2">Premium Kullanýcý</option>
			<option value="3">Özel kullanýcý</option>
			<option value="4">Klasik kullanýcý</option>
		</select></td>
	</tr>
	<tr>
		<td align="center" colspan="2" height="100px"><input type="submit"
			name="ekle" value="EKLE"></input></td>
	</tr>
</table>
</form>
<?php ob_flush();?>