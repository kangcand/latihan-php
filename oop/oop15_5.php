<?php
// buat abstract class
abstract class komputer
{
    // buat abstract method
    abstract public function lihat_spec($pemilik);

    public static function hidupkan_komputer()
    {
        echo "Hidupkan Komputer";
    }
}

echo komputer::hidupkan_komputer();
// Hidupkan Komputer
