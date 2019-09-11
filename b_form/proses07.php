<?php
if (isset($_POST['Pilih'])) {
    echo "Band Favorit Anda adalah :<br>";
    $a = $_POST['band01'];
    $b = $_POST['band02'];
    $c = $_POST['band03'];
    if ($a) {
        echo "+ " . $a . "<br>";
    }
    if ($b) {
        echo "+ " . $b . "<br>";
    }
    if ($c) {
        echo "+ " . $c . "<br>";
    }
    if (isset($_POST['band04'])) {
        echo "+ " . $_POST['band04'] . "<br>";
    }
}
?>
<html>
<input type="text" name="ucup">

</html>