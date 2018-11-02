<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pendaftaran PPDB SMK/SMA Assalaam</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Soal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Soal 1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Soal 2</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>
    <center><h1>PPDB SMK/SMA Assalaam</h1></center>
    <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
               <form action="soal1pro.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama"  placeholder="Masukan Nama" required>
                        <!--    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="radio1" name="jeniskelamin" value="Laki-laki" checked>Laki-laki
                            </label>
                            </div>
                            <div class="form-check-inline">
                            <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" id="radio2" name="jeniskelamin" value="Perempuan">Perempuan
                            </label>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="">Agama</label>
                        <select name="agama" id="" class="form-control" required>
                            <option value="Islam">Islam</option>
                            <option value="Budha">Budha</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                         <label for="exampleInputPassword1">Nama Orang Tua</label>
                         <input type="text" class="form-control" name="ortu" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai Matematika</label>
                        <input type="number" step="0.01" name="mtk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai Bahasa Indonesia</label>
                        <input type="number" step="0.01" name="ind" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai IPA</label>
                        <input type="number" step="0.01" name="ipa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai Bahasa Inggris</label>
                        <input type="number" step="0.01" name="ing" class="form-control" required>
                    </div>
                    <button type="submit" name="Daftar" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted"><center><b>&copy; SMK Assalaam Bandung </b>2018</center></span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>