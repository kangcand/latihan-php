<?php
function cetak_ganjil()
{
    for ($i = 1; $i < 10; $i++) {
        if ($i % 2 == 1) {
            echo "$i<br>";
        }
    }
}
echo $a . "<hr>";
cetak_ganjil();
