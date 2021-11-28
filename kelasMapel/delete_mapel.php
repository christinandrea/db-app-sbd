<?php

include '../conn.php';

$id = $_GET['idmapel'];

$del = "DELETE FROM mataPelajaran where idMapel = '$id'";

$q = mysqli_query($conn,$del);

if($q){
    header("location:mapel_list.php");
}

?>