<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>TNI</legend>
        <form action="tb.php" method="post">
            <label for="">Nama</label>
            <input type="text" name="nm" required>
            <br>
            <label for="">Tinggi Badan</label>
            <input type="number" name="tb" required>
            <br>
            <label for="">Berat Badan</label>
            <input type="number" name="bb" required>
            <br>
            <br>
            <input type="submit" name="save" value="Simpan">
            <input type="reset" value="Reset">
        </form>
    </fieldset>
</body>

</html>