<?php
include "../conn.php";

if(isset($_POST['regBidangStudiButton'])){
    $kodeBidangStudi = $_POST['kodeBidangStudi'];
    $namaBidangStudi = $_POST['namaBidangStudi'];

    $query = mysqli_query($conn,"INSERT INTO bidangStudi VALUES('$kodeBidangStudi','$namaBidangStudi')");

    if($query){
        header("location:listbidangstudi.php");

    }
    else{
        echo 'Gagal';
    }
}
?>