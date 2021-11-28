<?php
include "../conn.php";
if(isset($_POST['regKompetensiButton'])){
    $kodeKompetensi = $_POST['kodeKompetensi'];
    $namaKompetensi = $_POST['namaKompetensi'];
    $kodeJurusan = mysqli_real_escape_string($conn,$_POST['jurusan']);
    $query = mysqli_query($conn,"INSERT INTO kompetensi(kodeKompetensi,namaKompetensi,kodeJurusan) Values
    ('$kodeKompetensi','$namaKompetensi','$kodeJurusan')");
    if($query){
       header("location:listkompetensi.php");

    }
    else{
        echo 'Gagal';
    }
}
?>