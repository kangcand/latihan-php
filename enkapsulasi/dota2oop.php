<?php
class dota2user
{

   public $id;
   protected $pass = "kalian_tampan_saya_jelek";
   private $truename = "Adimas Purnama";

   public function access_bypass()
   {

      return $this->pass;
   }

   public function true()
   {

      return $this->truename;
   }
}
$userdota = new dota2user();

$userdota->id = "adimaspurnama221";

echo "id : " . $userdota->id;
echo "<br>";

echo "truename : " . $userdota->true();
echo "<br>";

echo "pass : " . $userdota->pass;
echo "<br>";
