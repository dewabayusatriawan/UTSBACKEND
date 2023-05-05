<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .tabel table {
            margin-top : 20px;
            width : 100%;
            border : 1px solid black;
            border-collapse: collapse;
            padding : 5px;
        }

        .tabel th {
            background-color: #5599ff;
        }

        .tabel th, .tabel td, .tabel tr  {
            border : 1px solid black;
            padding : 5px;
        }
     
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<ul>
<li><a href="formkelas.php">Kelas</a></li>
  <li><a href="formmhs.php">Mahasiswa</a></li>
  <li><a class="active" href="formdosen.php">Dosen</a></li>
  <li><a href="formukm.php">UKM</a></li>
</ul> 
<br>
    <form action="proseskelas.php" method="POST">
        <fieldset>
            <legend>Form input data Kelas</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>Kode Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kodekelas"></td>
                </tr>
                <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="namakelas"></td>
                </tr>
                <tr>
                    <td>Lokasi Kelas</td>
                    <td>:</td>
                    <td><select name="lokasikelas">
                            <option value="Lantai 1">Lantai 1</option>
                            <option value="Lantai 2">Lantai 2</option>
                            <option value="Lantai 3">Lantai 3</option>
                            <option value="Lantai 4">Lantai 4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kapasitas Kelas</td>
                    <td>:</td>
                    <td><input type="number" name="kapasitaskelas"></td>
                </tr>
                <tr>
                    <td>Status Kelas</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="statuskelas" value="full"> Full
                        <input type="radio" name="statuskelas" value="kosong"> Kosong
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

    <div class="tabel">
        <table>
            <tr>
                <th>Kode Kelas</th>
                <th>Nama Kelas</th>
                <th>Lokasi Kelas</th>
                <th>Kapasitas Kelas</th>
                <th>Status Kelas</th>
                <th>Act</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM ruangkelas";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['kodekelas'] ?></td>
                <td><?= $data['namakelas'] ?></td>
                <td><?= $data['lokasikelas'] ?></td>
                <td><?= $data['kapasitaskelas'] ?></td>
                <td><?= $data['statuskelas'] ?></td>
                <td>
                    <a href="editkelas.php?kodekelas=<?= $data['kodekelas'] ?>">
                        <button>Edit</button>
                    </a>
                    <a href="deletekelas.php?kodekelas=<?= $data['kodekelas'] ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>