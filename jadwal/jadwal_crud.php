<?php
include '../conn.php';

if(isset($_POST['regJadwalButton'])){
    $idJadwal = $_POST['idjadwal'];
    $day = $_POST['hari'];
    $sesi = $_POST['sesi'];

    $q = "INSERT INTO jadwal(idJadwal,hari,sesi) VALUES('$idJadwal','$day','$sesi')";
    $res = mysqli_query($conn,$q);

    
    if($res){
        header("location:jadwal_list.php");
    }else{
        echo "gagal";
    }
}


?>