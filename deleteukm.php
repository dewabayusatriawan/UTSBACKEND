<?php

$idukm = $_GET['idukm'];
include "koneksi.php";

$qry = "DELETE FROM ukm WHERE idukm = '$idukm'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'formukm.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}