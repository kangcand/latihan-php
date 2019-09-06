<?php
function tambah_string(&$b)
{
    $b = $b . ", Jakarta";
    return $b;
}

//pemanggilan
$a = "Universitas Budi Luhur";
echo "\$str = $a<br>"; // univ budi luhur
echo tambah_string($a) . "<br>"; // univ budi luhur jkt
echo "\$str = $a<br>"; // univ budi luhur
echo tambah_string($a) . "<br>";
echo tambah_string($a); 
// reference adalah operator assigment 
// khusus yang digunakan untuk
// men - copy nilai referensi 
// dari sebuah variabel .
