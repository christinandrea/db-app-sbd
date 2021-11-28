<?php

include '../conn.php';

$id = $_GET['idjadwal'];

$del = "DELETE FROM jadwal where idJadwal='$id'";
$q = mysqli_query($conn,$del);
if($q){
    header("location:jadwal_list.php");
    
}
?>