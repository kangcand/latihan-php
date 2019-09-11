<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>Tugas 1<br></center>
    <fieldset>
        <legend>Tugas Form</legend>
        <pre>
            <form action="form_ifpro.php" method="post">
                <label for="">Nama</label>
                <input type="text" name="nama" required><br>
                <label for="">kelas</label>
                <input type="text" name="kelas" required><br>
                <label for="">Mapel 1</label>
                <input type="number" name="mapel1" required><br>
                <label for="">Mapel 2</label>
                <input type="number" name="mapel2" required><br>
                <button type="submit" name="simpan">Simpan</button>
                <button type="reset">Reset</button>
            </form>
        </pre>
    </fieldset>
</body>

</html>