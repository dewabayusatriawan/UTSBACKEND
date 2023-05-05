<?php

$kodekelas = $_POST['kodekelas'];
$namakelas = $_POST['namakelas'];
$lokasikelas = $_POST['lokasikelas'];
$kapasitaskelas = $_POST['kapasitaskelas'];
$statuskelas = $_POST['statuskelas'];

include "koneksi.php";

$qry = "UPDATE ruangkelas SET 
        namakelas = '$namakelas',
        lokasikelas = '$lokasikelas',
        kapasitaskelas = '$kapasitaskelas',
        statuskelas = '$statuskelas'
        WHERE kodekelas = '$kodekelas'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'formkelas.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}
 