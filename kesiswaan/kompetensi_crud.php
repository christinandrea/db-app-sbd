<?php
include "conn.php";
if(isset($_POST['regKompetensiButton'])){
    $kodeKompetensi = $_POST['kodeKompetensi'];
    $namaKompetensi = $_POST['namaKompetensi'];
    $kodeJurusan = $_POST['kodeJurusan'];
    $query = mysqli_query($conn,"INSERT INTO kompetensi(kodeKompetensi,namaKompetensi,kodeJurusan) Values
    ('$kodeKompetensi','$namaKompetensi','kodeJurusan')");
    if($query){
        echo 'Berhasil';

    }
    else{
        echo 'Gagal';
    }
}
?>