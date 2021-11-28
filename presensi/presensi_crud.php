<?php
include "../conn.php";
if(isset($_POST['regMapelButton'])){
    $nis = $_POST['nis'];
    $idkelasmapel = $_POST['idkelasmapel'];
    $tanggalpertemuan = $_POST['tanggalpertemuan'];
    $presensi = $_POST['presensi'];
    $query = mysqli_query($conn,"INSERT INTO presensimapel(nis,idkelasmapel,tanggalpertemuan,presensi) Values
    ('$nis','$idkelasmapel','$tanggalpertemuan','$presensi')");
    if($query){
        echo 'Input anda Berhasil';

    }
    else{
        echo 'Input anda Gagal';
    }
}
?>