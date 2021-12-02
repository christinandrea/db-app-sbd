<?php

include '../conn.php';

if(isset($_POST['regKelasButton'])){
    $nis = $_POST['nis'];
    $kelas = mysqli_real_escape_string($conn,$_POST['kelas']);
    $tahun = $_POST['tahunajaran'];
    $guru = $_POST['nipwkelas'];

    $q = mysqli_query($conn,"INSERT INTO registrasiKelas(nis,idKelas,tahunAjaran,nipGuruWali) VALUES('$nis','$kelas','$tahun','$guru') ON DUPLICATE KEY UPDATE nis='$nis',idKelas='$kelas',tahunAjaran='$tahun',nipGuruWali='$guru'");
    if($q){
        header("location:regiskelas_list.php");

    }else{
        echo "gagal.";
    }
}

?>