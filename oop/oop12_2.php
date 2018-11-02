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
        return "Beli laptop seharga Rp" . self::$harga_beli;
    }
}
  
// set static property
laptop::$harga_beli = 4000000;
  
// panggil static method
echo laptop::beli_laptop();
