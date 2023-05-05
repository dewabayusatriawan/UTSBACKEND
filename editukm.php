<?php

$idukm = $_GET['idukm'];
include "koneksi.php";
$qry = "SELECT * FROM ukm WHERE idukm = '$idukm'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="updateukm.php" method="POST">
        <input type="hidden" name="idukm" value="<?= $data['idukm'] ?>">
        <fieldset>
            <legend>Form input data UKM</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>Nama UKM</td>
                    <td>:</td>
                    <td><input type="text" name="namaukm" value="<?= $data['namaukm'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Ketua</td>
                    <td>:</td>
                    <td><input type="text" name="namaketuaukm" value="<?= $data['namaketuaukm'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Dosen Pembimbing</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="namadosenpembimbing" value="<?= $data['namadosenpembimbing'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Anggota</td>
                    <td>:</td>
                    <td><input type="number" name="jumlahanggotaukm" value="<?= $data['jumlahanggotaukm'] ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah Pengurus</td>
                    <td>:</td>
                    <td><input type="number" name="jumlahpengurusukm" value="<?= $data['jumlahpengurusukm'] ?>"></td>
                </tr>
                <tr>
                    <td>Tempat Kegiatan</td>
                    <td>:</td>
                    <td><select name="tempatkegiatan">
                        <?php if($data['tempatkegiatan'] == 'Luar Kampus') { ?>
                            <option value="Luar Kampus">Luar Kampus</option>
                            <option value="Dalam Kampus">Dalam kampus</option>
                        <?php } else { ?>
                            <option value="Dalam Kampus">Dalam kampus</option>
                            <option value="Luar Kampus">Luar Kampus</option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status UKM</td>
                    <td>:</td>
                    <td>
                    <?php if($data['statusukm'] == 'aktif') { ?>
                        <input type="radio" name="statusukm" value="aktif" checked> Aktif
                        <input type="radio" name="statusukm" value="nonaktif"> Non-aktif
                    <?php } else { ?>
                        <input type="radio" name="statusukm" value="aktif"> Aktif
                        <input type="radio" name="statusukm" value="nonaktif" checked> Non-aktif
                    <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit">Tambah</button></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>