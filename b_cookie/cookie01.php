<html>
    <form action="" method="post">  
        <label for="">Nama</label>
        <input type="text" name="nama">
        <label for="">Nama Samaran</label>
        <input type="text" name="namasamaran">
        <input type="submit" name="save">
    </form>
</html>
<?php
    if (isset($_POST['save'])) {
        $a = $_POST['nama'];
        $b = $_POST['namasamaran'];
    }

setcookie("username", $a);
setcookie("namasamaran", $b, time() + 3600); /* expire in 1
hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk
pemeriksaan cookies</h2>";
