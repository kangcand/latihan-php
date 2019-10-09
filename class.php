<?php
class Produk
{
   var $merk;
   var $jumlah;
   var $nama;

   public function hidupkan()
   {
      return 'Hidupkan';
   }
}

$ujang = new Produk();
$hp2 = new Produk;
echo "<br>";
// var_dump($hp2);
$hp->merk = "Vivo";
$hp->jumlah = 2;
$hp->nama = "Vivo Y17";
var_dump($ujang);

// echo "Nama Produk : $hp->nama<br>";
// echo "Merk Handphone : $hp->merk<br>";
// echo "Jumlah Produk : $hp->jumlah<br>";
// echo $hp->hidupkan() . " Handphone";
