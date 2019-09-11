<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas</title>
</head>

<body>
    <center>
        <h1>Tugas</h1>
    </center>
    <form action="tugaspro.php" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="a" size="50" required></td>
            </tr>
            <tr>
                <th>NIS</th>
                <td><input type="number" name="b" size="1000"></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="c" cols="45" rows="10"></textarea></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>Laki-laki <input type="radio" name="d" value="Laki-laki">
                    Perempuan <input type="radio" name="d" value="Perempuan">
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>
                    <select name="e" style="size:50px;">
                        <option value="Islam">Islam</option>
                        <option value="Protestand">Protestand</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Budha">Budha</option>
                        <option value="Katolik">Katolik</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Asal Sekolah</th>
                <td><input type="text" name="f" size="50" required></td>
            </tr>
            <tr>
                <th>Nama Orang Tua/Wali</th>
                <td><input type="text" name="g" size="50" required></td>
            </tr>
            <tr>
                <th>Mata Pelajaran yang disukai</th>
                <td><input type="checkbox" name="h" value="MTK">Matematika
                    <input type="checkbox" name="i" value="IPA">Ilmu Pengetahuan Alam
                    <input type="checkbox" name="j" value="IPS">Ilmu Pengetahuan Sosial
                    <br><input type="checkbox" name="k" value="PAI">Pendidikan Agama Islam
                    <input type="checkbox" name="l" value="BI">Bahasa Indonesia
                </td>
            </tr>
            <tr>
                <th>Total Nilai Ijasah SMK</th>
                <td><input type="text" name="m" size="50" required></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" size="50" required></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="proses" value="Input Data"></td>
            </tr>
        </table>
    </form>
</body>

</html>