<?php

$idukm = $_POST['idukm'];
$namaukm = $_POST['namaukm'];
$namaketuaukm = $_POST['namaketuaukm'];
$namadosenpembimbing = $_POST['namadosenpembimbing'];
$jumlahanggotaukm = $_POST['jumlahanggotaukm'];
$jumlahpengurusukm = $_POST['jumlahpengurusukm'];
$tempatkegiatan = $_POST['tempatkegiatan'];
$statusukm = $_POST['statusukm'];

include "koneksi.php";

$qry = "UPDATE ukm SET 
        namaukm = '$namaukm',
        namaketuaukm = '$namaketuaukm',
        namadosenpembimbing = '$namadosenpembimbing',
        jumlahanggotaukm = '$jumlahanggotaukm',
        jumlahpengurusukm = '$jumlahpengurusukm',
        tempatkegiatan = '$tempatkegiatan',
        statusukm = '$statusukm'
        WHERE idukm = '$idukm'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'formukm.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}
