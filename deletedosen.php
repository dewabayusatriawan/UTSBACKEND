<?php

$nidndosen = $_GET['nidndosen'];
include "koneksi.php";

$qry = "DELETE FROM dosen WHERE nidndosen = '$nidndosen'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'formdosen.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}