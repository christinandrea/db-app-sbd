<?php

include '../conn.php';

$id = $_GET['idguru'];

$del = "DELETE FROM guru where nip='$id'";
$q = mysqli_query($conn,$del);
if($q){
    header("location:guru_list.php");
    
}
?>