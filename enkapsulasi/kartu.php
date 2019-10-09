<?php
class Kartu_ATM
{
   public $pemilik = "Dadang Pelo";
   protected $norek = "2210 2002 44";
   private $pin_atm = "300902";

   public function Transfer()
   {
      $a = $this->norek;
      $b = $this->pin_atm;
      if ($a == "2210 2002 44" && $b == "300902") {
         $c = "Transfer Berhasil";
      }
      return $c;
   }
   public function getInfo()
   {
      $a = $this->norek;
      $b = $this->pemilik;
      $c = "Nomor ATM : " . $a . " Pemilik :" . $b;
      return $c;
   }
}
$atm = new Kartu_ATM();

echo "pemilik ATM = $atm->pemilik<br>";
echo "Info ATM = " . $atm->getInfo() . "<br>";
echo "Transfer = " . $atm->Transfer();
