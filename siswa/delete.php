<?php
include '../conn.php';


$id = $_GET['idsiswa'];
$del = "DELETE FROM siswa WHERE nis='$id'";

$q = mysqli_query($conn,$del);

if($q){
    header("location:siswa_list.php");
}
?>