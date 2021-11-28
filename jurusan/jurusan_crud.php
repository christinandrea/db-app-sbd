<?php
include "../conn.php";
if(isset($_POST['regJurusanButton'])){
    $kodeJurusan = $_POST['kodeJurusan'];
    $namaJurusan = $_POST['namaJurusan'];
    $bidangstudi = mysqli_real_escape_string($conn,$_POST['bidangstudi']);
    $query = mysqli_query($conn,"INSERT INTO jurusan VALUES('$kodeJurusan','$namaJurusan','$bidangstudi')");
    if($query){
        header("location:listjurusan.php");

    }
    else{
        echo 'Gagal';
    }
}
?>