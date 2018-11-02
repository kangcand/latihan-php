<?php
function luas_lingkaran($jari)
{
    return 3.14 * $jari * $jari;
}
//pemanggilan fungsi
$a = 10;
echo "Luas lingkaran dengan jari-jari $a = ";
echo luas_lingkaran($a);
