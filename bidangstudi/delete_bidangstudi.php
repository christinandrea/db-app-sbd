<?php

include '../conn.php';

$id = $_GET['idbidang'];

$del = "DELETE FROM bidangStudi WHERE kodeBidangStudi='$id'";

$q = mysqli_query($conn,$del);

if($q){
    header("location:listbidangstudi.php");
}

?>