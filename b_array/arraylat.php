<!-- Array
Ajeng = 90;
Mamat = 70;
Ucup = 87;
Aang = 95;
Syahrul = 75;

Jika Nilai > 85 Grade A
Nilai > 75 Grade B
Nilai > 65 Grade C

Nama : Ajeng, Nilai : 90, Grade A
Nama : Ajeng, Nilai : 90, Grade A -->
<?php
$a = [
    "Ajeng" => 90,
    "Mamat" => 70,
    "Ucup" => 87,
    "Aang" => 95,
    "Syahrul" => 75,
];

foreach ($a as $data => $val) {
    if ($val > 85) {
        $grade = "A";
    } elseif ($val > 75) {
        $grade = "B";
    } elseif ($val > 65) {
        $grade = "C";
    }
    echo "Nama : $data, Nilai : $val, Grade : $grade<hr>";
}
?>