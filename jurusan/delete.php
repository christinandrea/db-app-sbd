<?php

include '../conn.php';

$id = $_GET['idjurusan'];


$del = "DELETE FROM jurusan WHERE kodeJurusan='$id'";
$q = mysqli_query($conn,$del);

if($q){
    header("location:listjurusan.php");
}

?>