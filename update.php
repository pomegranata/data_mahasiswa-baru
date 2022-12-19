<?php
	include "koneksi.php";
	
	$nim			= $_POST["nim"];
	$nama			= $_POST["nama"];
	$jurusan		= $_POST["jurusan"];
	$matakuliah		= $_POST["matakuliah"];
	
	//$query = "update data_mahasiswa set matakuliah='Animasi' where nama='Faza'";//
	
	$query = "update data_mahasiswa set nama='$nama', jurusan='$jurusan', matakuliah='$matakuliah' where nim='$nim'";

	if(mysqli_query($kon,$query))
		{echo "Data berhasil diupdate";}
	else
		{echo "Data gagal diupdate";}
?>
