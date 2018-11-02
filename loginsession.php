<?php
session_start();
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //periksa login
    if ($user == "achmatim" && $pass = "123456") {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session02.php'>di sini (session02.php)</a>
untuk menuju ke halaman pemeriksaan session";
    } else {
        echo "username atau password anda salah 
        silahkan kembali login <a href=session01.php> Login </a>";
    }
}
