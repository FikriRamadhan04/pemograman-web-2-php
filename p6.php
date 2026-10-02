<html>
<head>
    <title>Daftar Menu Makanan</title>
</head>
<body>

<h2>Daftar Menu Fikri Food</h2>

<?php

$menu = array();
$harga = array();

$menu[0] = "Ayam Bakar";
$menu[1] = "Sop Iga";
$menu[2] = "Bebek Bakar";
$menu[3] = "Empal Gentong H. Apud";
$menu[4] = "Es Teh";

$harga[0] = 90000;
$harga[1] = 16000;
$harga[2] = 23000;
$harga[3] = 13000;
$harga[4] = 7000;

for ($i = 0; $i < 5; $i++) {
    echo "Menu: " . $menu[$i] . "<br>";
    echo "Harga: Rp " . $harga[$i] . "<br><br>";
}

?>