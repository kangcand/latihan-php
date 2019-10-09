<?php
// Class Laptop
class Laptop
{
    // Property
    var $merk;
    var $ukuran_layar;
    var $pemilik;

    // Method
    public function Hidupkan_laptop()
    {
        return "Laptop Menyala";
    }

    public function Matikan_laptop()
    {
        return "Latop Mati";
    }
}
// Membuat objek dari class Laptop (Inisiasi)
// Inisiasi ditandai dengan keyword 'new'
$anto = new Laptop();

// set Property Class Laptop
$anto->merk = "Asus";
$anto->ukuran_layar = "14 Inch";
$anto->pemilik = "Anto";

// Get Property & Method
echo "Laptop   $anto->pemilik, Merk Laptop : $anto->merk, ukuran Layar  $anto->ukuran_layar";
echo "<br>" . $anto->Hidupkan_laptop();
echo "<br>" . $anto->Matikan_laptop();
