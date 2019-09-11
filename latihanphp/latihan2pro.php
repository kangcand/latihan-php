
<?php
if (isset($_POST['simpan'])) {
    $input = $_POST['a'];
    for ($a = 0; $a <= $input; $a++) {
        for ($i = $input; $i >= $a; $i--) {
            print('&nbsp');
        }
        for ($i = 0; $i < $a; $i++) {
            echo "*";
        }

        echo "<br>";
    }
    echo "Jumlah Bintang = <b>$input</b>";
}
