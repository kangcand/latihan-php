<?php
// buat class komputer
class komputer
{
    // buat konstanta class komputer
    const DOLLAR = '11000';
}
 
// turunkan class komputer ke class laptop
class laptop extends komputer
{
    // buat konstanta class laptop
    const DOLLAR = '12000';
  
    // buat method dengan konstanta class komputer
    public function beli_komputer($harga)
    {
        return "Beli Komputer Baru, Rp ." . $harga * parent::DOLLAR;
    }
  
    // buat method dengan konstanta class laptop
    public function beli_laptop($harga)
    {
        return "Beli Komputer Baru, Rp ." . $harga * self::DOLLAR;
    }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

echo $laptop_baru->beli_laptop(400);
echo "<br />";
echo $laptop_baru->beli_komputer(400);
