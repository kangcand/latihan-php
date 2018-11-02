<?php
function tambah_string($c)
{
    $b = $c . ", Indonesia";
    return $b;
}
//
$a = "Universitas Komputer";
echo "\$str = $a<br>"; // unversitas komputer
echo tambah_string("Bandung") . "<br>"; // universitas komputer, indonesia
echo "\$str = $a<br>"; // universitas komputer
