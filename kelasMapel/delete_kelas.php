<?php
include '../conn.php';

$id = $_GET['kdkelas'];

$del = "DELETE FROM kelas where idKelas = '$id'";

$q = mysqli_query($conn,$del);

if($q){
    header("location:kelas_list.php");
}
?>