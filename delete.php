<?php
	include "koneksi.php";
	
	$query = "delete from data_mahasiswa where jurusan='Manajemen'";
	
	if(mysqli_query($kon,$query))
		{echo "Data berhasil dihapus";}
	else
		{echo "Data gagal dihapus";}
?>