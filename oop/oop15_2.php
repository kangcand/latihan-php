<?php
// buat abstract class
abstract class komputer
{
    // buat abstract method
    abstract public function lihat_spec();
}

class laptop extends komputer
{
    public function beli_laptop()
    {
        return "Beli Laptop...";
    }
}
  
// buat objek dari class laptop
$laptop_baru = new laptop();
  
// Fatal error: Class laptop contains 1 abstract method
// and must therefore be declared abstract or implement
// the remaining methods (komputer::lihat_spec)
