<?php

/*************************************************************
Halaman ini merupakan contoh halaman pemeriksaan session. Pemeriksaan
session biasanya dilakukan jika suatu halaman memiliki
akses terbatas. Misalnya harus login terlebih dahulu.
 **************************************************************/
session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) { //jika sudah login
//menampilkan isi session
    echo "<h1>Selamat Datang " . $_SESSION['login'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah
login</h2>";
    echo "<h2>Klik <a href='session03.php'>di sini
(session03.php)</a> untuk LOGOUT</h2>";
} else {
    //session belum ada artinya belum login
    die("Anda belum login! Anda tidak berhak masuk ke halaman
ini.Silahkan login <a href='session01.php'>di sini</a>");
}
?>
<html>
<head><title>Upload File</title></head>
<body>
<FORM ACTION="" METHOD="POST"
ENCTYPE="multipart/form-data">
Upload File : <input type="file" name="file"><br>
<input type="submit" name="Upload" value="Upload">
</FORM>

<?php
    if (isset($_POST['Upload'])) {
        $dir_upload = "images/";
        $nama_file = $_FILES['file']['name'];
//
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            $cek = move_uploaded_file(
            $_FILES['file']['tmp_name'],
            $dir_upload . $nama_file
        );
            echo "<img src='../$dir_upload/$nama_file' style='width:100px; height:100px;' alt=''>";
        }
    } ?>


