<?php
function luas_lingkaran($jari)
{
    $luas = 3.14 * $jari * $jari;
    return $luas;
} //pemanggilan fungsi 
$r = 10;

echo "Luas lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);





// Membuat fungsi
// function perkalian($a, $b)
// {
// $hasil = $a * $b;
// return $hasil;
// }

// // Memanggil fungsi
// $a = perkalian(3, 4);
// echo "Hasil :" . $a . "
"<hr>";
