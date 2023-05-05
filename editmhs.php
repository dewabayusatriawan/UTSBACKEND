<?php

$nim = $_GET['nim'];
include "koneksi.php";
$qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit mahasiswa</title>
</head>
<body>
<form action="updatemhs.php" method="POST">
        <fieldset>
            <legend>Form Edit data mahasiswa</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?= $data['nim'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data['nama_mhs'] ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                    <?php if($data['jurusan'] == 'Sistem Komputer') { ?>
                            <option value="Sistem Komputer">Sistem Komputer</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <?php } else if($data['jurusan'] == 'Sistem Informasi') { ?>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <?php } else { ?>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <?php if($data['gender'] == 'Laki-laki' ) { ?>
                            <input type="radio" name="gender" value="Laki-laki" checked> Laki-laki
                            <input type="radio" name="gender" value="Perempuan"> Perempuan
                        <?php } else { ?>
                            <input type="radio" name="gender" value="Laki-laki"> laki-laki
                            <input type="radio" name="gender" value="Perempuan" checked> Perempuan
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" value="<?= $data['no_hp'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit">Edit</button></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>