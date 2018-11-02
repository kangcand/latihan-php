<?php
// buat abstract class
abstract class komputer
{
    
   // buat abstract method
    abstract public function lihat_spec($pemilik);
    
    // buat method ‘biasa’
    public function hidupkan_komputer()
    {
        echo "Hidupkan Komputer";
    }
}
