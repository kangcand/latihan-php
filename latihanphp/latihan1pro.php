<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['simpan'])) {
        $a = $_POST['no_dft'];
        $b = $_POST['nisn'];
        $c = $_POST['nama'];
        $d = $_POST['jk'];
        $e = $_POST['agama'];
        $f = $_POST['alamat'];
        $hb1 = $_POST['hobi1'];
        $hb2 = $_POST['hobi2'];
        $hb3 = $_POST['hobi3'];
    }
    ?>
    <fieldset>
        <legend>Output Latihan 1</legend>
        <p>Nomer Pendaftaran : <b><?php echo $a; ?></b><br></p>
        <p>Nomor Induk Siswa Nasional : <b><?php echo $b; ?></b></p>
        <p>Nama : <b><?php echo $c; ?></b></p>
        <p>Jenis Kelamin : <b><?php echo $d; ?></b></p>
        <p>Agama : <b><?php echo $e; ?></b></p>
        <p>Alamat : <b><?php echo $f; ?></b></p>
        Hobi : <b>
            <ul>
                <?php
                if (isset($hb1)) {
                    echo "<li>$hb1</li>";
                }
                if (isset($hb2)) {
                    echo "<li>$hb2</li>";
                }
                if (isset($hb3)) {
                    echo "<li>$hb3</li>";
                }
                ?>
            </ul>

    </fieldset>

</body>

</html>