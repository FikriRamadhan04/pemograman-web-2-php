<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiwa</title>
</head>
<body>
    
        <h1>Daftar Mahasiswa</h1>
        <table cellspacing="20">
<tr>
    <th>
        NIM
    </th>
    <th>
        NAMA
    </th>
    <th>
        PRODI
    </th>
    <th>
        REGULER
    </th>
    <th>ACTION</th>
</tr>
<?php
include "koneksi.php";
$sql = "select * from mahasiswa";
$result = mysqli_query($connect, $sql);
while($row = mysqli_fetch_assoc($result)){
echo "<tr><td>" . $row['nim'] . "</td><td>" . $row['nama'] . "</td><td>" . $row['prodi'] . "</td><td>" . $row['reguler'] . "</td>
<td><a href='delete.php?id=".$row['nim']."'>HAPUS</a>"." </td></tr>";
}
?>
        </table>
    
</body>
</html>