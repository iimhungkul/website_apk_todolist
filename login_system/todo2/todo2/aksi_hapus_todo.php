 <?php 
include "../config.php";
$id = preg_replace('/[^0-9]/','', $_GET['id']);
$sql ="DELETE FROM tbtodo_3 WHERE id='$id'";
  //echo $sql;
mysqli_query($mysqli,$sql);
$r=mysqli_affected_rows($mysqli);
if ($r > 0) {
  header("location:http:/login_system/todo2/index.php?halaman=todo&pesan_hapus=berhasil");
}else{
  header("location:http:/login_system/todo2/index.php?halaman=todo&pesan_hapus=gagal");
}
?>