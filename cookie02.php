<?php
if (isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada. Isinya : " .
        $_COOKIE['username'];
} else {
    echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}
if (isset($_COOKIE['namasamaran'])) {
    echo "<h1>Cookie 'namasamaran' ada. Isinya : " .
        $_COOKIE['namasamaran'];
} else {
    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}

echo "<h2>Klik <a href='cookie01.php'>di sini</a> untuk
penciptaan cookies</h2>";
echo "<h2>Klik <a href='cookie03.php'>di sini</a> untuk
penghapusan cookies</h2>";
