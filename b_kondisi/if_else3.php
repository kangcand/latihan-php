<?php
$uang = 10000;
$maka = 25000;
$minum = 10000;
$jum = $maka+$minum;
$tot = $uang - $jum;

echo "Uang Hari : Rp. $uang<br>";
echo "Makan : Rp. $maka<br>";
echo "Minum : Rp. $minum<br>";
echo "Hari Menghabiskan Uang Sebesar : Rp. $jum<br>";

if ($tot >= 10000) {
    echo "Sisa Uang Hari : Rp. $tot <br> dan hari <b>Sangat Hemat</b>";
} elseif ($tot >=1) {
    echo "Sisa Uang hari : Rp. $tot <br> dan hari <b>Hemat</b>";
} else {
    echo "Sisa Uang hari : Rp. $tot <br> dan hari <b>Boros</b>";
}
