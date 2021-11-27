<?php
include "conn.php";
if(isset($_POST['regbidangStudiiButton'])){
    $kodeBidangStudi = $_POST['kodeBidangStudi'];
    $namaBidangStudi = $_POST['namaBidangStudi'];
    $query = mysqli_query($conn,"INSERT INTO bidangStudi(kodeBidangStudi,namaBidangStudi) Values
    ('$kodeBidangStudi','$namaBidangStudi')");
    if($query){
        echo 'Berhasil';

    }
    else{
        echo 'Gagal';
    }
}
?>