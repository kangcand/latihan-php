<?php
class OrangTua
{
   private $gaji = 1000000;
   protected $uang_jjn = 5000;
   public function gaji()
   {
      return $this->gaji;
   }
}

class Anak extends OrangTua
{
   public function kepo_gaji()
   {
      return $this->gaji;
   }
   public function uang_jajan()
   {
      return $this->uang_jjn;
   }
}

$Cecep = new OrangTua();
echo "Uang Gaji: " . $Cecep->gaji() . "<br>";

$ahmad = new Anak;
echo "Gaji Sibapak : " . $ahmad->kepo_gaji() . "<br>";
echo "Uang Jajan Saya : " . $ahmad->uang_jajan();
