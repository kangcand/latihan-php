<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>

<body>
    <form action="" method="post">
            Email <input type="email" name="email" required>
        <br> Password<input type="password" name="pass" required>
        <br> <input type="submit" value="Login" name="Akses">
    </form>
</body>

</html>
<?php
if (isset($_POST['Akses'])) {
    $a = $_POST['email'];
    $b = $_POST['pass'];
    if ($a == "admin@gmail.com" && $b == "123456") {
        echo "Login Berhasil";
    } else {
        echo "Login Gagal";
    }
}
