<?php
function hitung_luas($p, $l)  {
    return  $p*$l;
}
function pangkat($basis, $exponent) {
    $result = $basis;
    for($i = 1; $i<$exponent;$i++){
        $result*=$basis;
    }
    return $result;
} 
if($_SERVER["REQUEST_METHOD"] == "POST") {

$basis = $_POST['basis'];
$exponent = $_POST['exponent'];

$angka = pangkat($basis, $exponent);
}

echo "Hasil dari $basis pangkat $exponent adalah $angka <br><br>";
?>