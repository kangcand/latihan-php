<?php
$namafile = "data.txt";
$handle = @fopen($namafile, "r");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer . "<br>";
    }
    fclose($handle);
}
