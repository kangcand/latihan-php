<?php
if (isset($_POST['proses'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    $f = $_POST['f'];
    $g = $_POST['g'];
    $h = $_POST['h'];
    $i = $_POST['i'];
    $j = $_POST['j'];
    $k = $_POST['k'];
    $l = $_POST['l'];
    $m = $_POST['m'];
    $email = $_POST['email'];
    echo "Nama                          : <b>$a</b><br>";
    echo "Nomor Induk Siswa             : <b>$b</b><br>";
    echo "Alamat                        : <b>$c</b><br>";
    echo "Jenis Kelamin                 : <b>$d</b><br>";
    echo "Agama                         : <b>$e</b><br>";
    echo "Asal Sekolah                  : <b>$f</b><br>";
    echo "Nama Orang Tua                : <b>$g</b><br>";
    echo "Mata Pelajran Yang disukai    : ";
    if ($h) {
        echo"~<b>$h</b><br>";
    }
    if ($i) {
        echo "~<b>$i</b><br>";
    }
    if ($j) {
        echo "~<b>$j</b><br>";
    }
    if ($k) {
        echo "~<b>$k</b><br>";
    }
    if ($l) {
        echo "~<b>$l</b><br>";
    }
    echo "Email                        : <b>$email</b><br>";
    echo "Nilai Ijazah SD              : <b>$m</b>";
    if ($m > 23) {
        echo"<br>Selamat Anda Diterima ";
    } else {
        echo"<br>Maaf Anda Tidak Diterima ";
    }
}
