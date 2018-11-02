<?php
class Persegi
{
    public $sisi;

    public function __construct($a)
    {
        $this->sisi = $a;
    }

    public function luas_persegi()
    {
        $luas = $this->sisi * $this->sisi;
        return $luas;
    }
}

class Lingkaran
{
    public $jari;

    public function __construct($a)
    {
        $this->jari = $a;
    }

    public function luas()
    {
        $luas = 3.14 *($this->jari*$this->jari);
        return $luas;
    }

    public function keliling()
    {
        $kel = 2 * (3.14 *$this->jari);
        return $kel;
    }
}

$lingkaran = new Lingkaran(10);
echo "Jari-jari Lingkaran : ".$lingkaran->jari."<br>";
echo "Luas Lingkaran      : " . $lingkaran->luas() . "<br>";
echo "Keliling Lingkaran  : " . $lingkaran->keliling() . "<br>";

echo"<br>";

$persegi = new Persegi(18);
echo"Sisi Persegi : $persegi->sisi CM<br>";
echo"Luas Persegi : ".$persegi->luas_persegi()." CM<br>";
