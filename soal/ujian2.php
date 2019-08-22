<?php

/*************************************************************
Halaman ini merupakan contoh halaman pemeriksaan session. Pemeriksaan
session biasanya dilakukan jika suatu halaman memiliki
akses terbatas. Misalnya harus login terlebih dahulu.
 **************************************************************/
session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) { //jika sudah login
} else {
    //session belum ada artinya belum login
    die("Anda belum login! Anda tidak berhak masuk ke halaman
                        ini.Silahkan login <a href='login.php'>di sini</a>");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="ujian.php">Assalaam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="ujian1.php">Soal 1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ujian2.php">Soal 2</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</a>
            </form>
        </div>
    </nav>
    <br>
    <center>
        <?php
        echo "<h1>Selamat Datang <b>" . $_SESSION['login'] . "</b><br> Silahkan mengerjakan soal 2</h1>";
        ?>
    </center>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Upload Foto
                </div>
                <div class="card-body">
                    <form action="" enctype="multipart/form-data" method="post">
                        <div class="form-group"
                            <label for="">Nilai 1</label>
                            <input type="number" class="form-control" name="a" id="" required>
                        </div>
                        <div class="form-group"
                            <label for="">Nilai 2</label>
                            <input type="number" class="form-control" name="b" id="" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-block btn-primary">Save</button>
                        </div>
                    </form>
                    <?php
                    class Perhitungan
                    {
                        public $a;
                        public $b;

                        public function __construct($aa, $bb)
                        {
                            $this->a = $aa;
                            $this->b = $bb;
                        }
                        public function tambah()
                        {
                            $c = $this->a + $this->b;
                            return $c;
                        }
                        public function bagi()
                        {
                            $c = $this->a / $this->b;
                            return $c;
                        }
                        public function kurang()
                        {
                            $c = $this->a - $this->b;
                            return $c;
                        }
                        public function kali()
                        {
                            $c = $this->a * $this->b;
                            return $c;
                        }
                    }
                    if (isset($_POST['save'])) {
                        $a = $_POST['a'];
                        $b = $_POST['b'];
                        $hitung = new Perhitungan($a, $b);
                        echo "Nilai 1       = $hitung->a <br>";
                        echo "Nilai 2       = $hitung->b <br><br>";


                        echo "Hasil Tambah  = " . $hitung->tambah()."<br>";
                        echo "Hasil Kurang  = " . $hitung->kurang() . "<br>";
                        echo "Hasil Kali    = " . $hitung->kali() . "<br>";
                        echo "Hasil Bagi    = " . $hitung->bagi() . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>