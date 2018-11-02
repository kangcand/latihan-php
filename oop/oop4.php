<?php
 
// buat class laptop
class laptop
{
 
   // buat protected property
    public $pemilik;
  
    // buat protected method
    protected function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}
 
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
  
// set protected property akan menghasilkan error
$laptop_anto->pemilik = "Anto";
// Fatal error: Cannot access protected property laptop::$pemilik
  
// tampilkan protected property akan menghasilkan error
echo $laptop_anto->pemilik;
// Fatal error: Cannot access protected property laptop::$pemilik
  
// jalankan protected method akan menghasilkan error
echo $laptop_anto->hidupkan_laptop();
// Fatal error: Call to protected method laptop::hidupkan_laptop()
// from context
