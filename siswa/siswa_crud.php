<?php
include "conn.php";
if(isset($_POST['regMapelButton'])){
    $nis = $_POST['nis'];
    $nama = $_POST['namasiswa'];
    $ttl = $_POST['ttl'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamatsiswa'];
    $telpsiswa = $_POST['telpsiswa'];
    $namaortu = $_POST['namaortu'];
    $kodekompetensi = $_POST['kodekompetensi'];
    $query = mysqli_query($conn,"INSERT INTO siswa(nis,mahasiswa,ttl,jeniskelamin,alamatsiswa,telpsiswa,namaortu,kodekompetensi) Values
    ('$nis','$nama','$ttl','$jeniskelamin','$alamat','$telpsiswa','$namaortu','$kodekompetensi')");
    if($query){
        echo 'Input anda Berhasil';

    }
    else{
        echo 'Input anda Gagal';
    }
}
?>