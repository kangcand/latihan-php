<?php
if (isset($_POST['ok'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nm_brg = $_POST['nm_brg'];
    $jml = $_POST['jml'];
    $harga_brg = $_POST['harga_brg'];
    $sub_total = $jml * $harga_brg;
    if ($jml > 10) {
        $total = $sub_total - (0.2 * $sub_total);
    } elseif ($jml > 5) {
        $total = $sub_total - (0.1 * $sub_total);
    } elseif ($jml < 5) {
        $total = $sub_total;
    }
    if ($jml < 0) {
        echo "Maaf Barang anda tidak bisa diproses";
    } else {
        echo "Nama Barang : $nm_brg<br>";
        echo "Jumlah Barang : $jml<br>";
        echo "Harga Satuan Barang : $harga_brg<br>";
        echo "Sub Total : $sub_total<br>";
        echo "Total Pembayaran : $total<br>";
    }
}
