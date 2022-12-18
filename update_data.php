<?php
	include "koneksi.php";
	
	$query = "update data_mahasiswa set nim='F1103', jurusan='Teknik Informatika' where nim='F1102'";

	if(mysqli_query($kon,$query))
		{echo "Data berhasil diupdate";}
	else
		{echo "Data gagal diupdate";}
?>
