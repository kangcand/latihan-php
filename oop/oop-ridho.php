<?php
class User
{
    private $birthdate="12 Desember 1992";
    protected $address="Yogyakarta";
    protected function birthdate()
    {
        $a = $this->birthdate;
        return "8 Agustus 1998 dan $a";
    }
}
class Anak extends User
{
    // public $birthdate = "10 Januari 1998";
    public function showbio()
    {
        $a = $this->address;
        $b = $this->birthdate();
        // $b = $this->birthdate;
        echo "Alamat Saya : $a<br> Tanggal Lahir : $b";
    }
}
$a = new Anak;
echo $a->showbio();
