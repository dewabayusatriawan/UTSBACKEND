<?php

$nidndosen = $_GET['nidndosen'];
include "koneksi.php";
$qry = "SELECT * FROM dosen WHERE nidndosen = '$nidndosen'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit dosen</title>
</head>
<body>
<form action="updatedosen.php" method="POST">
        <fieldset>
            <legend>Form Input Mengajar Mahasiswa</legend>
            <h2>Lengkapi Data Mengajar Hari Ini</h2>
            <table>
                <tr>
                    <td>NIDN</td>
                    <td>:</td>
                    <td><input type="number" name="nidndosen" value="<?= $data['nidndosen'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td>:</td>
                    <td><input type="text" name="namadosen" value="<?= $data['namadosen'] ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><select name="kelas">
                    <?php if($data['kelas'] == 'BA214') { ?>
                        <option value="BA214">BA214</option>
                        <option value="BB214">BB214</option>
                        <option value="BC214">BC214</option>
                    <?php } else if($data['kelas'] == 'BB214') { ?>
                        <option value="BB214">BB214</option>
                        <option value="BA214">BA214</option>
                        <option value="BC214">BC214</option>
                        <?php } else { ?>
                        <option value="BC214">BC214</option>
                        <option value="BA214">BA214</option>
                        <option value="BB214">BB214</option>
                    <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah</td>
                    <td>:</td>
                    <td><select name="matakuliah">
                    <?php if($data['matakkuliah'] == 'Back end') { ?>
                        <option value="Back end">Back end</option>
                        <option value="Front end">Front end</option>
                        <option value="Basis Data">Basis Data</option>
                    <?php } else if($data['kelas'] == 'Front end') { ?>
                        <option value="Front end">Front end</option>
                        <option value="Back end">Back end</option>
                        <option value="Basis Data">Basis Data</option>
                    <?php } else { ?>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Back end">Back end</option>
                        <option value="Front end">Front end</option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ruang Kelas</td>
                    <td>:</td>
                    <td><select name="ruangkelas">
                    <?php if($data['ruangkelas'] == 'Lab Database') { ?>
                        <option value="Lab Database">Lab Database</option>
                        <option value="Lab Web Technology">Lab Web Technology</option>
                        <option value="Basis Data">Basis Data</option>
                    <?php} else if($data['ruangkelas'] == 'Lab Web Technology') { ?>
                        <option value="Lab Web Technology">Lab Web Technology</option>
                        <option value="Lab Database">Lab Database</option>
                        <option value="Basis Data">Basis Data</option>
                    <?php } else { ?>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Lab Database">Lab Database</option>
                        <option value="Lab Web Technology">Lab Web Technology</option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" value="<?= $data['nohp'] ?>"></td>
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