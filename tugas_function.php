<?php
function segitiga($alas, $tinggi)
{
    echo "Alas : $alas<br>";
    echo "tinggi : $tinggi<br>";
    // $luas = ($alas * $tinggi) / 2;
    echo "Luas Segitiga : $luas<hr>";
}

segitiga(5, 10);

function lingkaran($jari = 8)
{
    echo "Jari-jari Lingkaran : $jari<br>";
    $luas = 3.14 * ($jari * $jari);
    $kel = 2 * (3.14 * $jari);
    echo "Luas Lingkaran : $luas<br>";
    echo "Keliling Lingkaran : $kel<br>";
}
$a = 10;
lingkaran();
