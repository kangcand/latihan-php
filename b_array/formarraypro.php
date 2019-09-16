<?php
if (isset($_POST['sbm'])) {

    $x = $_POST['nama']; // primary key
    $kelas = $_POST['kelas'];
    foreach ($x as $data => $xx) {
        echo "Nama  : " . $x[$data] .
            " - Kelas : " . $kelas[$data] . "<hr>";
    }
}



// $bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei');
// foreach ($bulan as $a => $b) {
//     echo $a . " " . $b . '<br/>';
// }
// $bulan = array('Januari', 'Februari', 'Maret');

// array('jenis' => 'Mobil', 'merk' => 'Toyota', 'tipe' => 'Vios')
