<?php
// form handling
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$prodi=$_POST['prodi'];
$reguler=$_POST['reguler'];

// memasukan ke database:

include "koneksi.php";
$sql = "insert into mahasiswa values ('$nim', '$nama', '$prodi', '$reguler' )";
mysqli_query($connect,$sql);

header('location:data_mahasiswa.php')
?>