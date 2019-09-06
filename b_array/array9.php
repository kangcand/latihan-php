<?php
$transport = array(
    'jalan kaki',
    'sepeda',
    'motor', 'mobil', 'becak'
);
echo "<pre>";
print_r($transport);
echo "</pre>";


$mode = current($transport);
echo "$mode<br>"; // jalankaki
$mode = end($transport);
echo "$mode<br>"; // becak
$mode = current($transport);
echo "$mode<br>"; // becak
$mode = prev($transport);
echo "$mode<br>"; // mobil
$mode = key($transport);
echo ("$mode<br>"); // 3
// reset($transport);
$mode = reset($transport);
echo ("$mode<br>");


// Mode 
// $mode = current($transport);
// echo $mode . "<br>"; // $mode = 'foot';
// $mode = next($transport);
// echo $mode . "<br>"; // $mode = 'bike';
// $mode = current($transport);
// echo $mode . "<br>"; // $mode = 'bike';
// $mode = prev($transport);
// echo $mode . "<br>"; // $mode = 'foot';
// $mode = end($transport);
// echo $mode . "<br>"; // $mode = 'plane';
// $mode = current($transport);
// echo $mode . "<br>"; // $mode = 'plane';
