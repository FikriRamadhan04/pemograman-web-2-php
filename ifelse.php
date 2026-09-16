<!-- <?php
$nilai = $_POST['nilai'];

if($nilai>80){
echo "Selamat Anda Lulus!";
}
else{
    echo "Anda Tidak Lulus!";
} -->

?>

<?php
$nilai = $_POSt['nilai'];

if($nilai>90){
    echo "<h1>Nilai Anda A</h1>";
}
elseif ($nilai>80){
    echo "<h1>Nilai Anda B</h1>";
}
elseif ($nilai>70){
    echo"<h1>Nilai Anda C</h1>";
}
elseif ($nilai>50){
    echo"<h1>Nilai Anda D</h1>";
}
else {
    echo "<h1>Nilai Anda E</h1>";
}
