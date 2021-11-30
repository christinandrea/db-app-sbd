<?php
include '../conn.php';


if(isset($_POST['regMapelButton'])){
    $nis =  mysqli_real_escape_string($conn,$_POST['nis']);
    $jadwal = mysqli_real_escape_string($conn,$_POST['jadwal']);
    $kkm = $_POST['nkkm'];
    $np = $_POST['np'];
    $pp =$_POST['predpeng'];
    $deskp = $_POST['deskpeng'];
    $nk = $_POST['nk'];
    $pk = $_POST['predket'];
    $deskk = $_POST['deskket'];

    $q = "INSERT INTO registrasiMapel(nis,idKelasMapel,nilaiKKM,nilaiPengetahuan,predPengetahuan,deskripsiPengetahuan,nilaiKeterampilan,predKeterampilan,deskripsiKeterampilan) VALUES('$nis','$jadwal','$kkm','$np','$pp','$deskp','$np','$pk','$deskk')";

    $ins = mysqli_query($conn,$q);

    if($ins){
        echo "berhasil";
    }
}
?>