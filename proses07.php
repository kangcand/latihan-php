<?php
if (isset($_POST['Pilih'])) {
    echo "Band Favorit Anda adalah :<br>";
    $a = $_POST['band01'];
    if ($a) {
        echo "+ " . $a . "<br>";
    }
    if (isset($_POST['band02'])) {
        echo "+ " . $_POST['band02'] . "<br>";
    }
    if (isset($_POST['band03'])) {
        echo "+ " . $_POST['band03'] . "<br>";
    }
    if (isset($_POST['band04'])) {
        echo "+ " . $_POST['band04'] . "<br>";
    }
}
