<?php
function luas_segitiga($alas, $tinggi)
{
    return ($alas*$tinggi)/2;
}
$a = 10;
$b = 15;
echo "Alas : $a <br> Tinggi : $b<br> Luas Segitiga :  ";
echo luas_segitiga($a, $b);
