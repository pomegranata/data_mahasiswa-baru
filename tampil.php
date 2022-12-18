<!DOCTYPE HTML>
<html>
	<head>
		<title>Data Mahasiswa</title>
		<style>
			table,tr,td {
				border: 1px solid black;
			}
			thead{
				background-color: #cccddd;
			}
		</style>
	</head>
	<body>
		<h2>Data Mahasiswa</h2>
		<table>
			<thead>
				<tr>
					<td><center>No. Urut</center></td>
					<td><center>Nomor Induk Mahasiswa</center></td>
					<td><center>Nama Mahasiswa</center></td>
					<td><center>Jurusan</center></td>
					<td><center>Mata Kuliah</center></td>
					<td><center>Update Data</center></td>
					<td><center>Delete Data</center></td>
				</tr>
			</thead>
			<?php
			include "koneksi.php";
			$no = 1;
			$query = mysqli_query($kon, 'select * from data_mahasiswa');
			
			while ($data = mysqli_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data['NIM'] ?></td>
						<td><?php echo $data['Nama'] ?></td>
						<td><?php echo $data['Jurusan'] ?></td>
						<td><?php echo $data['MataKuliah'] ?></td>
						<td><a href="update.php">Update</a></td>
						<td><a href="delete.php">Delete</a></td>
					</tr>
			<?php } ?>
		</table>
	</body>
</html>