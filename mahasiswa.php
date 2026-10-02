<?php
// form handling
$nim=$_POST['nim'];
$nama=$_POST['nama'];

$connect=mysqli_connect("localhost","root","","mycampus") or die("gagal tekoneksi");
$sql = "insert into mahasiswa values ('$nim', '$nama')";
mysqli_query($connect,$sql);
?>