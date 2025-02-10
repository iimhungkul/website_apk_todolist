<?php
include "../config.php";
$tugas=$_POST['tugas'];
$jangka_waktu=$_POST['jangka_waktu'];
$keterangan=$_POST['keterangan'];
$sql=" insert into tbtodo_2 (tugas,jangka_waktu,keterangan) values ('$tugas','$jangka_waktu','$keterangan')";

//echo $sql;
mysqli_query($mysqli,$sql);
$r=mysqli_affected_rows($mysqli);
if ($r > 0) {
	header("location:http:/login_system/todo1/index.php?halaman=todo&pesan_tambah=berhasil");
}else{
	header("location:http:/login_system/todo1/index.php?halaman=todo&pesan_tambah=gagal");
}
?>