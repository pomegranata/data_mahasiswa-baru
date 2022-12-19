<?php
	include "koneksi.php";
	
	$nim		= $_POST['nim'];
	
	$query = "delete from data_mahasiswa where nim='$nim'";
	
	if(mysqli_query($kon,$query))
		{echo "Data berhasil dihapus";}
	else
		{echo "Data gagal dihapus";}
?>