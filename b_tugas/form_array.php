<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Array</title>
</head>

<body>
    <center>
        <p>Form Array</p>
    </center>
    <fieldset>
        <legend>Form Array</legend>
        <!-- Form 1 -->
        <form action="" method="post">
            <label for="">Masukan Jumlah</label>
            <input type="number" min="1" name="jml" required>
            <br>
            <input type="submit" name="submit" value="Simpan">
            <hr>
        </form>

        <!-- Form 2 -->
        <form action="form_arraypro.php" method="post">
            <?php
            if (isset($_POST['submit'])) {
                $jml_form = $_POST['jml'];
                for ($a = 0; $a < $jml_form; $a++) { ?>
                    <label for=>Masukan Bilangan</label>
                    <input type="text" name="bil[]" required>
                    <label for=>Masukan Pangkat </label>
                    <input type="text" name="pangkat[]" required>
                    <br>
                    <br>
                <?php } ?>
                <input type="submit" name="sbm" value="Simpan">
                <input type="reset" value="Reset">
        </form>
    <?php } ?>

    </fieldset>
</body>

</html>