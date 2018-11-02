<?php
// buat class laptop
class laptop
{
    public $merk;
    public $pemilik;
 
    // static property
    public static $harga_beli;
  
    //static method
    public static function beli_laptop()
    {
        return "Beli Laptop";
    }
}
  
// set static property
laptop::$harga_beli = 4000000;
  
// get static property
echo "harga beli : Rp" . laptop::$harga_beli;

echo "<br />";
  
// panggil static method
echo laptop::beli_laptop();
