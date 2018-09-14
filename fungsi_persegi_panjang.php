<?php
function luas_persegi_panjang($panjang, $lebar)
{
    return $panjang * $lebar;
}
$a = 10;
$b = 15;
// $c = 20;
echo "Panjang : $a <br> Lebar : $b<br> Luas Persegi Panjang :  ";
echo luas_persegi_panjang($a, $b);
