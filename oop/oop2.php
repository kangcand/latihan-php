<?php

class Luas_Persegi
{
    public function hitung_luas($sisi)
    {
        $luas = $sisi * $sisi;
        return $luas;
    }
}

$luas = new Luas_Persegi;
// $luas->sisi = 10;
// echo "Sisi Persegi : ".$luas->sisi."<br>";
echo "Luas Persegi : " .$luas->hitung_luas(10);
?>  