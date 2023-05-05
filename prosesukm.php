<?php

$namaukm = $_POST['namaukm'];
$namaketuaukm = $_POST['namaketuaukm'];
$namadosenpembimbing = $_POST['namadosenpembimbing'];
$jumlahanggotaukm = $_POST['jumlahanggotaukm'];
$jumlahpengurusukm = $_POST['jumlahpengurusukm'];
$tempatkegiatan = $_POST['tempatkegiatan'];
$statusukm = $_POST['statusukm'];

include "koneksi.php";

$qry = "INSERT INTO ukm VALUES (
    '','$namaukm', '$namaketuaukm', '$namadosenpembimbing', '$jumlahanggotaukm', '$jumlahpengurusukm', '$tempatkegiatan', '$statusukm'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'formukm.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
