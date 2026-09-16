<?php
$gaya = $_POST['gaya'];
$luas = $_POST['luas'];
$tekanan = $gaya / $luas;

echo "Gaya : $gaya N <br>";
echo "Luas : $luas m² <br>";
echo "Tekanan: $tekanan pa <br>";
?>