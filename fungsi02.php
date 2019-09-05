<?php
function cetak_ganjil($awal, $akhir)
{
    for ($i = $awal; $i < $akhir; $i++) {
        if ($i % 2 == 1) {
            echo "$i ";
        }
    }
} //pemanggilan fungsi 
$a = 10;
$b = 50;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
cetak_ganjil($a, $b);
echo "<hr>";

// parameter basic
function perkenalan($nama, $kls)
{
    echo "Nama Saya : $nama<br>";
    echo "Kelas : $kls";
}

$a = "Nathan";
$b = "XI RPL 2";
perkenalan($a, $b);

// optional parameter
function perkenalan2($nama = "Aang")
{
    echo "Nama Saya : $nama";
}
echo "<hr>";
$a = "Saka";
perkenalan2($a);

// buat 2 fungsi
// luas segitiga -> Alas, Tinggi, Luas
// lingkaran -> Jari-jari,Luas, keliling
