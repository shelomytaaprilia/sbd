<?php 
$server='localhost'; 
$user='root'; 
$pwd=''; 
$database='apil'; 
$koneksi=mysqli_connect($server,$user,$pwd); 
mysqli_select_db($koneksi,$database); 
?> 