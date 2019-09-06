<?php

function LuasSegitiga($a, $t)
{
    $hasil = 0.5 * $a * $t;
    return "Luas Segitiga : " . $hasil;
}

$alas = 11;
$tinggi = 20;

$luas = LuasSegitiga($alas, $tinggi);
echo  $luas;
$luas2 = LuasSegitiga(10, 15);
echo "<br> Luas segitiga 2 :  $luas2";
