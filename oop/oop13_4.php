<?php
// buat class laptop
class laptop
{
  
   // buat konstanta
    const DOLLAR = '12000';
  
    // buat method
    public function beli_laptop($harga)
    {
        return "Beli Komputer Baru, Rp. " . $harga * self::DOLLAR;
    }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

echo $laptop_baru->beli_laptop(400);
// hasil: Beli Komputer Baru, Rp. 4800000
