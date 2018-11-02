<?php
// buat class komputer
class komputer
{
    public $a = "Asep";
    public function lihat_spesifikasi()
    {
        return "Spec Komputer: Acer, 
     Processor Intel core i7, Ram 4GB";
    }
}
  
// turunkan class komputer ke laptop
class laptop extends komputer
{
    public $a = "Asep";
    public function lihat_spesifikasi()
    {
        return "$this->a Spec Laptop: Asus, 
     Processor Intel core i5, Ram 2GB";
    }

    public function lihat_spesifikasi_komputer()
    {
        return parent::lihat_spesifikasi();
    }
}
// buat objek dari class laptop (instansiasi)
$gadget_baru = new laptop();
  
//panggil method lihat_spesifikasi()
echo $gadget_baru->lihat_spesifikasi();

echo "<br />";
 
//panggil method lihat_spesifikasi_komputer()
echo $gadget_baru->lihat_spesifikasi_komputer();
