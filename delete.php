<?php
$id = $_GET['id'];
include "koneksi.php";
$sql = "delete from mahasiswa where nim='$id'";
mysqli_query($connect,$sql);
header('location:data_maahasiswa.php');
?>