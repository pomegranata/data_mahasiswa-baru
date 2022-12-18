<?php
	$server="localhost";
	$username="root";
	$password="";
	$db="dbmhs";
	
	$kon = mysqli_connect($server,$username,$password);
	
if ($kon){
	echo "Database MySQL <b>berhasil</b> dikoneksikan<br>";
}else {
	echo "Database MySQL <b>gagal</b> dikoneksikan<br>";
}


$hasil = mysqli_select_db($kon,$db);

if ($hasil){
	echo "Database $db berhasil dipilih";
}else {
	echo "Database $db gagal berhasil";
}

?>
	