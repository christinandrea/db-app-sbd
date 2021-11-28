<?php
include "../conn.php";
if(isset($_POST['regSiswaButton'])){
    $nis = $_POST['nis'];
    $nama = $_POST['namasiswa'];
    $ttl = $_POST['ttl'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamatsiswa'];
    $telpsiswa = $_POST['telpsiswa'];
    $namaortu = $_POST['namaortu'];
    $kodekompetensi = mysqli_real_escape_string($conn,$_POST['kompetensi']);
    $query = mysqli_query($conn,"INSERT INTO siswa(nis,namaSiswa,tanggalLahirSiswa,jenisKelaminSiswa,alamatSiswa,noTelpSiswa,namaOrangTua,kodeKompetensi) Values
    ('$nis','$nama','$ttl','$jeniskelamin','$alamat','$telpsiswa','$namaortu','$kodekompetensi')");
    if($query){
        header("location:siswa_list.php");

    }
    else{
        echo 'Input anda Gagal';
    }
}
?>