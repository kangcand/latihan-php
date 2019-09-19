<?php
if (isset($_POST['sbm'])) {
    $x = $_POST['bil'];
    $y = $_POST['pangkat'];
    var_dump(count($x));
    for ($a = 0; $a < count($x); $a++) {
        var_dump($x[$a]);
        var_dump($y[$a]);
        for ($z = 1; $z <= $y[$a]; $z++) {
            echo $x[$a];
            if ($z < $y[$a]) {
                echo "x";
            }
        }
        $hasil = pow($x[$a], $y[$a]);
        echo " = " . $hasil . " -> ";
        if ($hasil % 2 == 1) {
            echo "Bilangan Ganjil";
        } else {
            echo "Bilangan Genap";
        }
        echo "<hr>";
    }
}
