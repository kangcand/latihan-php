<?php
if (isset($_POST['simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['kelas'];
    $c = $_POST['mapel1'];
    $d = $_POST['mapel2'];
    $rata = ($c + $d) / 2;
    echo "<pre>";
    echo "Nama      : $a<br>";
    echo "Kelas     : $b<br>";
    echo "Mapel 1   : $c<br>";
    echo "Mapel 2   : $d<br>";
    echo "Rata-rata : $rata<br>";
    if ($rata > 75) {
        echo "Status    : Lulus";
    } else {
        echo "Status    : Tidak Lulus";
    }
    echo "</pre>";
}
