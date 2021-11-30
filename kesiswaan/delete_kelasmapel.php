<?php

include '../conn.php';

$id = $_GET['idkelasmapel'];

$del = "DELETE FROM kelasMataPelajaran where idKelasMapel = '$id'";

$q = mysqli_query($conn,$del);

if($q){
    header("location:kelas_list.php");
}
?>