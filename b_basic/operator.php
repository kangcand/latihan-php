<?php
$gaji = 1000000;
$tunjangan = 500000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak) + $tunjangan;
$pembagian = $thp/4;

echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "tunjang istri dan anak = Rp. $tunjangan <br>";
echo "Gaji yang dibawa pulang = Rp. $thp <br>";
echo "setelah dibagi2 ke anak dan istri, rata2nya = Rp. $pembagian";
