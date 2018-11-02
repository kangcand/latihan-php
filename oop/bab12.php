<?php
// buat class komputer
class komputer
{
  
   // protected static method
    protected static function beli_komputer()
    {
        return "Beli Komputer Baru";
    }
}
  
// turunkan class komputer ke class laptop
class laptop extends komputer
{
  
   // private static method
    private static function beli_laptop()
    {
        return "Beli Laptop Baru";
    }
  
    // public static method
    public static function beli_semua()
    {
        echo parent::beli_komputer();
        echo "<br />";
        echo self::beli_laptop();
    }
}
  
  
// panggil static method
laptop::beli_semua();
  
// coba panggil private static method

// Fatal error: Call to private method laptop::beli_laptop()
