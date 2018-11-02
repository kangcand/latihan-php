<?php
// buat class laptop
class laptop
{
 
   // buat konstanta
    const DOLLAR = '12000';
}
  
// buat variabel dengan nama class
$nama = "laptop";
  
// panggil konstanta class
echo "Harga dollar saat ini = Rp. " . $nama::DOLLAR;
// hasil: Harga dollar saat ini = Rp. 12000
