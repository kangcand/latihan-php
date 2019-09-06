<?php
$a = 5;
$b = 5;
$c = true;
$namaDepan = "Angga";
$namaBelakang = "Cute";
echo "$a == $b : " . ($a == $b);
echo "<br>$a != $b : " . ($a != $b);
echo "<br>$a > $b : " . ($a > $b);
echo "<br>$a < $b : " . ($a < $b);
echo "<br>($a == $b) && ($a > $b) : " . (($a == $b) && ($a > $b));
echo "<br>($a == $b) || ($a > $b) : " . (($a != $b) || ($a > $b));
echo "<br>($a == $b) xor ($a > $b) : ".(($a == $b) xor ($a < $b));
echo "<br>! Hasilnya : ". (!$c);

echo "<br><br> contoh lebih dari". ($a<=$b);
echo "<br>" . $namaDepan.$namaBelakang;
