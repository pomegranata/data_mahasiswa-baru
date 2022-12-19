<html>
	<head>
		<title>Update Data Mahasiswa Baru</title>
		<style type="text/css" media="screen">
			table (font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;)
			input (font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 14px;height: 30px;)
			</style>
	</head>
	<body>
		<div style="border:0; padding:10px; width:760px; height:auto;">
			<form action="update.php" method="POST">
				<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr height="46">
						<td width="10%"></td>
						<td width="25%"></td>
						<td width="65%"><font color="red" size="6">Update Data Mahasiswa Baru</font></td>
					</tr>
					<tr height="46">
						<td></td>
						<td><font size="3">Nomor Induk Mahasiswa</font></td>
						<td><input type="text" name="nim" size="35" maxlength="6"/></td>
					</tr>
					<tr height="46">
						<td></td>
						<td><font size="3">Nama Mahasiswa</font></td>
						<td><input type="text" name="nama" size="50" maxlength="30"/></td>
					</tr>
					<tr height="46">
						<td></td>
						<td><font size="3">Jurusan</font></td>
						<td><select name="jurusan">
							<option value="-">-- Pilih Jurusan --
							<option value="Desain Komunikasi Visual">Desain Komunikasi Visual
							<option value="Teknik Informatika">Teknik Informatika
							<option value="Sistem Informasi">Sistem Informasi
							<option value="Manajemen">Manajemen
						</select></td>
					<tr height="46">
						<td></td>
						<td><font size="3">Mata Kuliah</font></td>
						<td><input type="text" name="matakuliah" size="50" maxlength="30"/></td>
					</tr>
					<tr height="46">
						<td></td>
						<td></td>
						<td><input type="submit" name="Submit" value="Simpan Perubahan">
							<input type="reset" name="reset" value="Batal"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>