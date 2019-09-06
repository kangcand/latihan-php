<html>

<head>
    <title>Pengolahan Form</title>
</head>

<body>
    <FORM ACTION="" METHOD="POST">
        Nama Anda :
        <input type="text" name="nama" required><br>
        <input type="submit" name="Input" value="Simpan">
    </FORM>

</body>

</html>
<?php
if (isset($_POST['Input'])) {
    $a = $_POST['nama'];
    echo "Nama Anda : <b>$a</b>";
}

?>