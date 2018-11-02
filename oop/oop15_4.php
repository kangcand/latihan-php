<?php
// buat abstract class
abstract class komputer
{
    // buat abstract method
    abstract public function lihat_spec($pemilik);
}

class laptop extends komputer
{
    public function lihat_spec()
    {
        return "Lihat Spec Laptop...";
    }
}
  
// buat objek dari class laptop
$laptop_baru = new laptop();
  
// Fatal error: Declaration of laptop::lihat_spec()
// must be compatible with komputer::lihat_spec($pemilik)
