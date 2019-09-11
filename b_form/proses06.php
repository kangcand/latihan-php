<?php
if (isset($_POST['input'])) {
    $jrs = $_POST['jurusan'];
    echo "Jurusan Anda adalah
<b><font color='red'>$jrs</font></b>";
}
