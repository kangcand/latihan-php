<?php
if (isset($_POST['sbm'])) {

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nomer = 0;
    $nomer2 = 0;
    var_dump($nama);
    foreach ($nama as $data => $a) {
        echo "Nama  : " . $nama[$data] .
            " - Kelas : " . $kelas[$data] . "<hr>";
    }
}

$bulan = array('Januari', 'Februari', 'Maret');
foreach ($bulan as $index => $value) {
    echo $index . " " . $value . '<br/>';
}
// $bulan = array('Januari', 'Februari', 'Maret');

// array('jenis' => 'Mobil', 'merk' => 'Toyota', 'tipe' => 'Vios')
