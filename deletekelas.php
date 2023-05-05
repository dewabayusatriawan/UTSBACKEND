<?php

$kodekelas = $_GET['kodekelas'];
include "koneksi.php";

$qry = "DELETE FROM ruangkelas WHERE kodekelas = '$kodekelas'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'formkelas.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}