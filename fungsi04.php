<?php
function tambah_string($str)
{
    $b = $str . ", Indonesia";
    return $b;
}
//
$a = "Universitas Komputer";
echo "\$str = $a<br>";
echo tambah_string($a) . "<br>";
echo "\$str = $a<br>";
