<?php
class komputer
{
    final public function lihat_spec()
    {
        return "Lihat Spesifikasi Komputer";
    }
}

class laptop extends komputer
{
    public function lihat_spec()
    {
        return "Lihat Spesifikasi Laptop";
    }
}

$laptop_baru = new laptop();
// Fatal error: Cannot override final method
// komputer::lihat_spec()
