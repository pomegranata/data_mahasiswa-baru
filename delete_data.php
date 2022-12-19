<html>
	<head>
		<title>Delete Data</title>
		<style type="text/css" media="screen">
			table (font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;)
			input (font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 14px;height: 30px;)
			</style>
	</head>
	<body>
		<div style="border:0; padding:10px; width:760px; height:auto;">
			<form action="delete.php" method="POST">
				<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr height="46">
						<td width="10%"></td>
						<td width="25%"></td>
						<td width="65%"><font color="red" size="6">Delete Data Mahasiswa Baru</font></td>
					</tr>
					<tr height="46">
						<td></td>
						<td><font size="3">NIM dari data mahasiswa yang ingin dihapus</font></td>
						<td><input type="text" name="nim" size="35" maxlength="6"/></td>
					</tr>
					<tr height="46">
						<td></td>
						<td></td>
						<td><input type="submit" name="Submit" value="Konfirmasi"></td>
						<td><input type="reset" name="reset" value="Batal"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
