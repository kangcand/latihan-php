<?php

$array = ["hasan","dani","toto","dadang","Deni"];
$array2 = (["Dadang"=>"Bandung","Hasan"=>"Sumenep"
        ,"Joni"=>"Cikalong","Boni"=>"Bojong Honey"]);

foreach ($array as $a) {
    echo "$a Orang<br>";
}
echo"<br>";

foreach ($array3 as $a => $u) {
    echo "$a Orang $u <br>";
}
