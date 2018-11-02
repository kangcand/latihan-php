<?php
function cetak_ganjil($awal, $akhir, $tengah)
{
    for ($i = $awal; $i < $akhir; $i++) {
        if ($i % 2 == 1) {
            echo "$i ";
        }
    }
}
//pemanggilan fungsi
$a = 10;
$b = 50;
$c = 25;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
cetak_ganjil(19, 10, 19);
