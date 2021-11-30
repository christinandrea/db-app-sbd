<?php
include "../conn.php";
if(isset($_POST['regMapelButton'])){
    $idmapel = $_POST['idmapel'];
    $namamapel = $_POST['namamapel'];
    $query = mysqli_query($conn,"INSERT INTO mataPelajaran(idMapel,namaMapel) Values
    ('$idmapel','$namamapel')");

    if($query){
        echo 'Input anda Berhasil';

    }
    else{
        echo 'Input anda Gagal';
    }
}
?>