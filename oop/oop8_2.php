<?php
// buat class laptop
class laptop
{
    private $pemilik;
    private $merk;
  
    // constructor sebagai pembuat nilai awal
    public function __construct($mereuk, $nugaduh)
    {
        $this->pemilik = $nugaduh;
        $this->merk = $mereuk;
    }

    public function hidupkan_laptop()
    {
        return "Hidupkan Laptop $this->merk punya $this->pemilik";
    }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_andi = new laptop("Alienware", "Dadang Konelo");

echo $laptop_andi->hidupkan_laptop();
echo "<br />";

// objek 2
$laptop_anto = new laptop("MSI", "Albi Bouy");

echo $laptop_anto->hidupkan_laptop();
echo "<br />";
