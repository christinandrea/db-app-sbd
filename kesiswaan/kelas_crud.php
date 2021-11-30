<?php
include '../conn.php';

if(isset($_POST['addKelas'])){
    $kodekelas = $_POST['kdkelas'];
    $namakelas = $_POST['nmkelas'];

    $q = mysqli_query($conn,"INSERT INTO kelas(idKelas,deskripsiKelas) VALUES('$kodekelas','$namakelas')");

    if($q){
        header("location:kelas_list.php");

    }
    else{
        echo "Failed";
    }
}
?>