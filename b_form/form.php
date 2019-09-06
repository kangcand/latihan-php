<html>

<head>
    <title>Belajar Form</title>
</head>

<body>
    <center>Belajar Form</center>
    <form action="" method="get">
        <label for="">Nama</label>
        <input type="text" name="nama" required>
        <br>
        <br>
        <button type="submit" name="simpan">Simpan</button>
        <button type="reset">Reset</button>
    </form>
    <?php
    if (isset($_GET['simpan'])) {
        $a = $_GET['nama'];
        echo "Nama Saya : $a";
    }
    ?>
</body>

</html>

<!-- php.test/form.php?nama=Mahmud&simpan= -->