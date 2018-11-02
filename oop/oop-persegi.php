<?php
class Persegi
{
    public $sisi;

    public function hitung_luas()
    {
        $luas = $this->sisi * $this->sisi;
        return $luas;
    }
}

class Lingkaran
{
    public $jarijari;

    public function luas()
    {
        $luas = (22/7) * ($this->jarijari*$this->jarijari);
        return $luas;
    }

    public function keliling()
    {
        $diameter = $this->jarijari + $this->jarijari;
        $keliling = (22/7) * $diameter;
        return $keliling;
    }
}

$lingkaran = new Lingkaran;
$lingkaran->jarijari = 14;
echo"Jari-jari lingkaran : $lingkaran->jarijari <br>";
echo"Luas lingkaran      : ".$lingkaran->luas()."<br>";
echo"Keliling lingkaran  : " . $lingkaran->keliling() . "<br>";

echo"<br>";
$luas = new Persegi;
$luas->sisi = 76;
echo"Sisi Persegi : $luas->sisi <br>";
echo "Luas Persegi : ".$luas->hitung_luas();
