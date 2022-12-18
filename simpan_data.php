<?php
 include "koneksi.php";

//variabel penampung data

	$nim			= $_POST["nim"];
	$nama			= $_POST["nama"];
	$jurusan		= $_POST["jurusan"];
	$matakuliah		= $_POST["matakuliah"];

	if($nim=="")
{
	?>
		<script language="JavaScript">
		alert('Isian NIM masih kosong. Silahkan diisi dulu');
		document.location='index.php';
		</script>
	<?php
}
	
	if($nama=="")
{
	?>
		<script language="JavaScript">
		alert('Isian Nama masih kosong. Silahkan diisi dulu');
		document.location='index.php';
		</script>
	<?php
}
	
	if($jurusan=="")
{
	?>
		<script language="JavaScript">
		alert('Isian Jurusan masih kosong. Silahkan diisi dulu');
		document.location='index.php';
		</script>
	<?php
}

	if($matakuliah=="")
{
	?>
		<script language="JavaScript">
		alert('Isian Mata Kuliah masih kosong. Silahkan diisi dulu');
		document.location='index.php';
		</script>
	<?php
}
	
	else
{
	//cek NIM, ada yang sama apa tidak
	$pilih="select * from data_mahasiswa where nim='$nim'";
	$cek=mysqli_query($kon, $pilih);
	$jumlah_data=mysqli_num_rows($cek);
	if ($jumlah_data >= 1)
	{
		?>
		<script language="JavaScript">
		alert('NIM sudah digunakan');
		document.location='index.php';
		</script>
		<?php
	}
	else
	{
		//memasukkan data
		$query="insert into data_mahasiswa (nim,nama,jurusan,matakuliah) values ('$nim','$nama','$jurusan','$matakuliah')";
		
		//eksekusi query
		$hasil=mysqli_query($kon, $query);
		
		if ($hasil){
			?>
				<script language="JavaScript">
				alert('Proses Simpan Data Berhasil !');
				document.location='index.php';
				</script>
			<?php
			exit;
		}
		else{
			echo "Gagal memasukkan data :(";
			exit;
		}
	}
}
?>