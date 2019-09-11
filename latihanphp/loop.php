<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>Loop Star</center>
    <fieldset>
        <legend>Loop</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Masukan Bilangan</td>
                    <td><input type="number" min=1 name="bil"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="si">Simpan</button></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['si'])) {
            $a = $_POST['bil'];
            echo "Bintang <br>";
            for ($i = 1; $i <= $a; $i++) {
                echo "* ";
            }
            echo "<hr>";
            echo "Bintang Piramid <br>";
            for ($i = 1; $i <= $a; $i++) {
                for ($x = $a; $x >= $i; $x--) {
                    echo "&nbsp;";
                }
                for ($n = 1; $n <= $i; $n++) {
                    echo " *";
                }
                echo "<br>";
            }
            echo "<hr>";
            echo "Bintang Piramid Terbalik<br>";
            for ($i = $a; $i >= 1; $i--) {
                for ($x = $a; $x >= $i; $x--) {
                    echo "&nbsp;";
                }
                for ($n = 1; $n <= $i; $n++) {
                    echo " *";
                }
                echo "<br>";
            }
            echo "<hr>";
            echo "Bintang Belah Ketupat <br>";

            for ($i = 1; $i <= $a; $i++) {
                for ($x = $a; $x >= $i; $x--) {
                    echo "&nbsp;";
                }
                for ($n = 1; $n <= $i; $n++) {
                    echo " *";
                }
                echo "<br>";
            }
            for ($i = $a; $i >= 1; $i--) {
                for ($x = $a; $x >= $i; $x--) {
                    echo "&nbsp;";
                }
                for ($n = 1; $n <= $i; $n++) {
                    echo " *";
                }
                echo "<br>";
            }
            echo "<br>Jumlah Bintang = $a";
        }
        ?>
    </fieldset>
</body>

</html>