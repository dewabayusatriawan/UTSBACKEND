<?php

$kodekelas = $_GET['kodekelas'];
include "koneksi.php";
$qry = "SELECT * FROM ruangkelas WHERE kodekelas = '$kodekelas'";
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

    <form action="updatekelas.php" method="POST">
        <fieldset>
            <legend>Form input data UKM</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>Kode Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kodekelas" value="<?= $data['kodekelas'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="namakelas" value="<?= $data['namakelas'] ?>"></td>
                </tr>
                <tr>
                    <td>Lokasi Kelas</td>
                    <td>:</td>
                    <td><select name="lokasikelas">
                    <?php if($data['lokasikelas'] == 'Lantai 1') { ?>
                        <option value="Lantai 1">Lantai 1</option>
                        <option value="Lantai 2">Lantai 2</option>
                        <option value="Lantai 3">Lantai 3</option>
                        <option value="Lantai 4">Lantai 4</option>
                    <?php } else if($data['lokasikelas'] == 'Lantai 2') { ?>
                        <option value="Lantai 2">Lantai 2</option>
                        <option value="Lantai 1">Lantai 1</option>
                        <option value="Lantai 3">Lantai 3</option>
                        <option value="Lantai 4">Lantai 4</option>
                    <?php } else if($data['lokasikelas'] == 'Lantai 3') { ?>
                        <option value="Lantai 3">Lantai 3</option>
                        <option value="Lantai 1">Lantai 1</option>
                        <option value="Lantai 2">Lantai 2</option>
                        <option value="Lantai 4">Lantai 4</option>
                    <?php } else { ?>
                        <option value="Lantai 4">Lantai 4</option>
                        <option value="Lantai 1">Lantai 1</option>
                        <option value="Lantai 2">Lantai 2</option>
                        <option value="Lantai 3">Lantai 3</option>
                    <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kapasitas Kelas</td>
                    <td>:</td>
                    <td><input type="number" name="kapasitaskelas" value="<?= $data['kapasitaskelas'] ?>"></td>
                </tr>
                <tr>
                    <td>Status Kelas</td>
                    <td>:</td>
                    <td>
                    <?php if($data['statuskelas'] == 'full') { ?>
                        <input type="radio" name="statuskelas" value="full" checked> Full
                        <input type="radio" name="statuskelas" value="kosong"> Kosong
                    <?php } else { ?>
                        <input type="radio" name="statuskelas" value="full"> Full
                        <input type="radio" name="statuskelas" value="kosong" checked> Kosong
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