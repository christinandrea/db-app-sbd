<?php
include "../../conn.php";
if(isset($_POST['regPresensiButton'])){
    $nis =  mysqli_real_escape_string($conn,$_POST['nis']);
    $idkelasmapel = mysqli_real_escape_string($conn,$_POST['idkelasmapel']);
    $tanggalpertemuan = $_POST['tanggalpertemuan'];
    $presensi = $_POST['presensi'];
    $query = mysqli_query($conn,"INSERT INTO presensiMapel(nis,idKelasMapel,tanggalPertemuan,status) Values
    ('$nis','$idkelasmapel','$tanggalpertemuan','$presensi')");

    if($query){
        header("location:../kelas_list.php");

    }
    else{
        echo 'Input anda Gagal';
    }
}
?>