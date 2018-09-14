<html>

<head>
    <title>Pengolahan Form</title>
</head>

<body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        Nama Anda : <input type="text" name="yyyy"><br>
        <input type="submit" name="x" value="Simpan">
    </FORM>
</body>

</html>
<?php
if (isset($_POST['x'])) {
    $a = $_POST['yyyy'];
    echo "Nama Anda : <b>$a</b>";
}
?>