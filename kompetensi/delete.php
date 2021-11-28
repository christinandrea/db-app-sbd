<?php

include '../conn.php';

$id = $_GET['idkompetensi'];

$del = "DELETE FROM kompetensi WHERE kodeKompetensi='$id'";
$q = mysqli_query($conn,$del);

if($q){
    header("location:listkompetensi.php");
}

?>