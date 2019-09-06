<?php
if (isset($_POST['Pilih'])) {
    echo "Band Favorit Anda adalah :<br>";
    $a = $_POST['band01'];
    $b = $_POST['band02'];
    if ($_POST['band01']) {
        echo "+ " . $a . "<br>";
    }
    if ($b) {
        echo "+ " . $b . "<br>";
    }
    if (isset($_POST['band03'])) {
        echo "+ " . $_POST['band03'] . "<br>";
    }
    if (isset($_POST['band04'])) {
        echo "+ " . $_POST['band04'] . "<br>";
    }
}
