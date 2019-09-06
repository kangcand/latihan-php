<?php
$arrNilai = array("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrNilai as $a => $b) {
    echo "Nilai $a = $b<br>";
}
// reset($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list($a, $b) = each($arrNilai)) {
    echo "Nilai $a = $b<br>";
}
