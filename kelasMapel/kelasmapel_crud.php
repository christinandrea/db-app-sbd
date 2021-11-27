<?php
include '../conn.php';

if(isset($_POST['regJadwalKelas'])){
// {
    $idkelasmapel = $_POST['idkelasmapel'];
    $kelas = mysqli_real_escape_string($conn,$_POST['kelas']);
    $mapel = mysqli_real_escape_string($conn,$_POST['mapel']);
    $day = mysqli_real_escape_string($conn,$_POST['jadwal']);
    $nip = mysqli_real_escape_string($conn,$_POST['nipguru']);
 
    $tahun = $_POST['tahunajaran'];

    // $idkelasmapel = $_POST['idkelasmapel'];
    // $kelas = $_POST['kelas'];
    // $mapel = $_POST['mapel'];
    // $day = $_POST['jadwal'];
    // $nip = $_POST['nipguru'];
    // $tahun = $_POST['tahunajaran'];
    $query = "INSERT INTO kelasMataPelajaran(idKelasMapel,idKelas,idMapel,nip,idJadwal,tahunPelajaran) 
            VALUES('$idkelasmapel','$kelas','$mapel','$nip','$day','$tahun')";

    $res = mysqli_query($conn,$query);

    if($res){
        echo "Berhasil";
    }
    else{
        echo "failed.";
    }
}

?>