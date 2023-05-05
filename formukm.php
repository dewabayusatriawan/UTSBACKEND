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
    <form action="prosesukm.php" method="POST">
        <fieldset>
            <legend>Form input data UKM</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>Nama UKM</td>
                    <td>:</td>
                    <td><input type="text" name="namaukm"></td>
                </tr>
                <tr>
                    <td>Nama Ketua</td>
                    <td>:</td>
                    <td><input type="text" name="namaketuaukm"></td>
                </tr>
                <tr>
                    <td>Nama Dosen Pembimbing</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="namadosenpembimbing">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Anggota</td>
                    <td>:</td>
                    <td><input type="number" name="jumlahanggotaukm"></td>
                </tr>
                <tr>
                    <td>Jumlah Pengurus</td>
                    <td>:</td>
                    <td><input type="number" name="jumlahpengurusukm"></td>
                </tr>
                <tr>
                    <td>Tempat Kegiatan</td>
                    <td>:</td>
                    <td><select name="tempatkegiatan">
                            <option value="Luar Kampus">Luar Kampus</option>
                            <option value="Dalam Kampus">Dalam kampus</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status UKM</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="statusukm" value="aktif"> Aktif
                        <input type="radio" name="statusukm" value="nonaktif"> Non-aktif
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
                <th>Nama UKM</th>
                <th>Nama Ketua</th>
                <th>Nama Dosen Pembimbing</th>
                <th>Jumlah Anggota</th>
                <th>Jumlah Pengurus</th>
                <th>Tempat kegiatan</th>
                <th>Status UKM</th>
                <th>Act</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM ukm";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['namaukm'] ?></td>
                <td><?= $data['namaketuaukm'] ?></td>
                <td><?= $data['namadosenpembimbing'] ?></td>
                <td><?= $data['jumlahanggotaukm'] ?></td>
                <td><?= $data['jumlahpengurusukm'] ?></td>
                <td><?= $data['tempatkegiatan'] ?></td>
                <td><?= $data['statusukm'] ?></td>
                <td>
                    <a href="editukm.php?idukm=<?= $data['idukm'] ?>">
                        <button>Edit</button>
                    </a>
                    <a href="deleteukm.php?idukm=<?= $data['idukm'] ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>