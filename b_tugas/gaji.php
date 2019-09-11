<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penggajian</title>
</head>

<body>
    <center>Form Penggajian</center>
    <fieldset>
        <legend>Form Penggajian</legend>
        <form action="gajipro.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required size="50"></td>
                </tr>
                <tr>
                    <td>Nomor InduK Pegawai</td>
                    <td><input type="number" name="nip" required size="50"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki" required>Laki-laki
                        <input type="radio" name="jk" value="Perempuan" required>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" rows="5" cols="58" required></textarea></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status" id="" required>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>
                        <select name="jabatan" id="" required>
                            <option value="HRD">HRD</option>
                            <option value="Manager">Manager</option>
                            <option value="Staff">Staff</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Golongan</td>
                    <td>
                        <select name="golongan" id="" required>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Potongan</td>
                    <td>
                        <input type="checkbox" name="pot1" value="BPJS">BPJS
                        <input type="checkbox" name="pot2" value="Koperasi">Koperasi
                        <input type="checkbox" name="pot3" value="Jamsostek">Jamsostek
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="save" value="Simpan">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>