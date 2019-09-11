<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Latihan 1 Form</h2>
    </center>
    <fieldset>
        <legend>Latihan 1</legend>
        <form action="latihan1pro.php" method="post">
            <table border="0">
                <tr>
                    <td>Nomor Pendaftaran</td>
                    <td>
                        <input type="number" name="no_dft" required>
                    </td>
                </tr>
                <tr>
                    <td>Nomor Induk Siswa Nasional</td>
                    <td>
                        <input type="number" name="nisn" required>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type=" text" name="nama" size="30" required>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
                        <input type="radio" name="jk" value="Perempuan" required>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama" id="" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Atheis">Atheis</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea name="alamat" cols="50" rows="10" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>
                        <input type="checkbox" name="hobi1" value="Mancing">Mancing
                        <input type="checkbox" name="hobi2" value="Makan">Makan
                        <input type="checkbox" name="hobi3" value="Tidur">Tidur
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="simpan">Simpan</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>
</body>

</html>