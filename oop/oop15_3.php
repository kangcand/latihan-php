<?php
// buat abstract class
abstract class komputer
{
    // buat abstract method
    abstract public function lihat_spec();
}

class laptop extends komputer
{
  
// implementasi abstract method
    public function lihat_spec()
    {
        return "Lihat Spec Laptop...";
    }
  
    // method 'biasa'
    public function beli_laptop()
    {
        return "Beli Laptop...";
    }
}
  
// buat objek dari class laptop
$laptop_baru = new laptop();
echo $laptop_baru->lihat_spec();
// Lihat Spec Laptop...

echo "<br />";

echo $laptop_baru->beli_laptop();
// Beli Laptop...
