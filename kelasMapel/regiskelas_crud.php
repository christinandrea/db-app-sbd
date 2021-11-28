<?php

include '../conn.php';

if(isset($_POST['regkelasButton'])){
    $nis = $_POST['nis'];
    $kelas = mysqli_real_escape_string($conn,$_POST['kelas']);
    $nip = $_POST['nipwkelas'];
    $tahun = $_POST['tahunajaran'];

    $ins = "INSERT INTO registrasiKelas(nis,idKelas,tahunAjaran,nipGuruWali) VALUES('$nis','$kelas','$tahun','$nip')";
    $q = mysqli_query($conn,$ins);

    if($q){
        header("location:kelas_list.php");
    }else{
        echo "failed";
    }

}


?>