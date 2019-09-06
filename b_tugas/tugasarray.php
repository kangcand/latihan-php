<?php
$a = [
    ['Nama' => 'Ujang', 'kelas' => 'XI RPL 1', 'Alamat' => "Jalan Kidul"],
    ['Nama' => 'Mahmud', 'kelas' => 'XI RPL 2', 'Alamat' => "Jalan Kidul 1"],
    ['Nama' => 'Ucok', 'kelas' => 'XI RPL 3', 'Alamat' => "Jalan Kidul 2"]
];
echo "<pre>";
print_r($a);
echo "</pre>";

foreach ($a as $b => $c) {
    echo "$c[Nama], $c[kelas], $c[Alamat] <hr>";
}
