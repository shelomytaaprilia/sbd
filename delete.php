<?php 
include 'config.php'; 
$nim=$_GET['nim'];
$simpandata=("delete from mahasiswa where nim='$nim'"); 
mysqli_query($koneksi,$simpandata); 
if ($simpandata) {header('Location:index.html?Sukses');} 
else {header('Location:index.html?Gagal');} 
?>