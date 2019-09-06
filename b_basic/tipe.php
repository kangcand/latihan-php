<?php
$nim = "0411500400";
$nama = "Chotimatul Musyarofah";
$umur = 23;
$nilai = 82.25;
$status = true;
$cek=null;

echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur ;
print "<br>";
printf("Nilai : %.2f<br>", $umur);

if ($status) {
    echo "Umur " .$umur=$umur+2;
} else {
    echo "Status : Tidak Aktif";
}

if (isset($cek)) {
    echo"<br>Ada";
} else {
    echo "<br>tidak ada";
}
