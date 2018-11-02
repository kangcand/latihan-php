<?php
  
// buat class laptop
class laptop
{
  
   // buat property untuk class laptop
    public $alas = 10;
    public $tinggi = 5;
    // buat method untuk class laptop
    public function hidupkan_laptop()
    {
        return "Hidupkan Laptop ";
    }

    public function matikan_laptop()
    {
        return "Matikan Laptop";
    }

    public function luas()
    {
        return ($this->alas * $this->tinggi)/2;
    }
}
  
// buat objek dari class laptop (instansiasi)
$segitiga = new laptop;
echo $segitiga->luas();
