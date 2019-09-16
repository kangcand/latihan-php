<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php $a = "Sahabat Rifqy";
    $b = "Sahabat Syahrul as Irsyal"; ?>
    <form action="hiddenpro.php" method="post">
        <input type="text" name="rifqy" value="<?php echo $a; ?>">
        <input type="text" name="irsyal" value="<?php echo $b; ?>">
        <input type="submit" name="save" value="Simpan">
    </form>
</body>

</html>