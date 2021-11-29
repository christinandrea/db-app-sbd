<?php


include '../conn.php';
$id = $_GET['nis'];

$del = "DELETE FROM registrasiKelas WHERE nis='$id'";

$q = mysqli_query($conn,$del);

if($q){
    header("location:regiskelas_list.php");
}
?>