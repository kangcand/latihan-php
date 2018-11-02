<?php
final class komputer
{
    public function lihat_spec()
    {
        return "Lihat Spesifikasi Komputer";
    }
}

class laptop extends komputer
{
}

$laptop_baru = new laptop();
// Fatal error: Class laptop may not inherit
// from final class (komputer)
