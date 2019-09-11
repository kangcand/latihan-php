<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['save'])) {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];
        $jabatan = $_POST['jabatan'];
        $golongan = $_POST['golongan'];
        $bpjs = $_POST['pot1'];
        $kop = $_POST['pot2'];
        $jamsos = $_POST['pot3'];

        if ($golongan == "A1") {
            $gol = 250000;
        } elseif ($golongan == "A2") {
            $gol = 200000;
        } elseif ($golongan == "A3") {
            $gol = 150000;
        }

        if ($jabatan == "HRD") {
            $jab = 5000000;
        } elseif ($jabatan == "HRD") {
            $jab = 4500000;
        } elseif ($jabatan == "Staff") {
            $jab = 3000000;
        } elseif ($jabatan == "Karyawan") {
            $jab = 2500000;
        }

        if ($status == "Menikah") {
            $stat = 100000;
        } elseif ($status == "Belum Menikah") {
            $stat = 50000;
        }
        if ($bpjs) {
            $pot1 = 250000;
        }
        if ($kop) {
            $pot2 = 150000;
        }
        if ($jamsos) {
            $pot3 = 150000;
        }
        $topot = $pot1 + $pot2 + $pot3;
        $gaji_kotor = ($gol + $jab + $stat) - $topot;
        $ppn = $gaji_kotor *  0.025;
        $gaji_bersih = $gaji_kotor - $ppn;
    } ?>
    <center>Form Gaji</center>
    <div align="right"><?php echo date('d M Y') ?></div>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Nomor Induk Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Jabatan</th>
            <th>Golongan</th>
            <th>Potongan</th>
        </tr>
        <tr>
            <td><?php echo $nama; ?></td>
            <td><?php echo $nip; ?></td>
            <td><?php echo $jk; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $status; ?></td>
            <td><?php echo $jabatan; ?></td>
            <td><?php echo $golongan; ?></td>
            <td>
                <ul>
                    <?php if (isset($bpjs)) { ?>
                        <li>
                            <?php echo $bpjs ?>
                        </li>
                    <?php } ?>
                    <?php if (isset($kop)) { ?>
                        <li>
                            <?php echo $kop ?>
                        </li>
                    <?php } ?>
                    <?php if (isset($jamsos)) { ?>
                        <li>
                            <?php echo $jamsos ?>
                        </li>
                    <?php } ?>
                </ul>
            </td>
        </tr>
        <tr>
            <th colspan="8">Penghitungan Gaji</th>
        </tr>
        <tr>
            <th>Golongan</th>
            <td colspan="7" align="left"><?php echo "Rp. " . number_format($gol, 0, ",", ".") ?></th>
        </tr>
        <tr>
            <th>Jabatan</th>
            <td colspan="7" align="left"><?php echo "Rp. " . number_format($jab, 0, ",", ".") ?></th>
        </tr>
        <tr>
            <th>Tunjangan Status</th>
            <td colspan="7" align="left"><?php echo "Rp. " . number_format($stat, 0, ",", ".") ?></th>
        </tr>
        <tr>
            <th rowspan="">Potongan</th>
            <?php if (isset($bpjs)) { ?>
                <td><?php echo $bpjs; ?></td>
                <td align="left"><?php echo "Rp. " . number_format($pot1, 0, ",", ".") ?></td>
            <?php } ?>
            <?php if (isset($kop)) {
                ?>
                <td><?php echo $kop; ?></td>
                <td align="left"><?php echo "Rp. " . number_format($pot2, 0, ",", ".") ?></td>
            <?php } ?>
            <?php if (isset($jamsos)) {
                ?>
                <td><?php echo $jamsos; ?></td>
                <td align="left"><?php echo "Rp. " . number_format($pot3, 0, ",", ".") ?></td>
            <?php } ?>

        </tr>
        <tr>
            <th>Total Potongan</th>
            <td colspan="7" align="left">
                <?php
                echo "Rp. " . number_format($topot, 0, ",", ".")
                ?>
            </td>
        </tr>
        <tr>
            <th>Gaji Kotor</th>
            <td colspan="4">(Golongan + Jabatan + Status) - Potongan</td>
            <td colspan="3" align="left"><?php echo "Rp. " . number_format($gaji_kotor, 0, ",", ".") ?></th>
        </tr>
        <tr>
            <th>Pajak Penghasilan (2.5%)</th>
            <td colspan="7" align="left"><?php echo "Rp. " . number_format($ppn, 0, ",", ".") ?></th>
        </tr>
        <tr>
            <th>Gaji Bersih <br>(Gaji Kotor - Pajak)</th>
            <td colspan="7" align="left"><?php echo "Rp. " . number_format($gaji_bersih, 0, ",", ".") ?></th>
        </tr>
    </table>
</body>

</html>