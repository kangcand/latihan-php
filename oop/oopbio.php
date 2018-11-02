<?php

class Biodata
{
    public $nama;
    public $alamat;
    public $kelas;

    public function asal_sekolah()
    {
        return "SMK ASSALAAM";
    }
}

$a = new Biodata;
$b = new Biodata;
$c = new Biodata;

$a->nama = "Pak Oyek";
$a->alamat = "Banjaran";
$a->kelas = "S2 Seni";

$b->nama = "Ahmad Candra";
$b->alamat = "Kp. Ciguriang(Bandung Poek)";
$b->kelas = "XII RPL 1";

$c->nama = "Entis Simpati";
$c->alamat = "Cicing";
$c->kelas = "XII RPL 2";
echo "Nama           :".$b->nama."<br>";
echo "Alamat         :" . $b->alamat . "<br>";
echo "Kelas          :" . $b->kelas . "<br>";
echo "Asal Sekolah   :" . $b->asal_sekolah() . "<br>";
echo "<br>";
echo "Nama           :" . $c->nama . "<br>";
echo "Alamat         :" . $c->alamat . "<br>";
echo "Kelas          :" . $c->kelas . "<br>";
echo "Asal Sekolah   :" . $c->asal_sekolah() . "<br>";
echo "<br>";
echo "Nama           :" . $a->nama . "<br>";
echo "Alamat         :" . $a->alamat . "<br>";
echo "Kelas          :" . $a->kelas . "<br>";
echo "Asal Sekolah   :" . $a->asal_sekolah() . "<br>";
