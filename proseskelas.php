<?php

$kodekelas = $_POST['kodekelas'];
$namakelas = $_POST['namakelas'];
$lokasikelas = $_POST['lokasikelas'];
$kapasitaskelas = $_POST['kapasitaskelas'];
$statuskelas = $_POST['statuskelas'];

include "koneksi.php";

$qry = "INSERT INTO ruangkelas VALUES (
    '$kodekelas', '$namakelas', '$lokasikelas', '$kapasitaskelas', '$statuskelas'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'formkelas.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
