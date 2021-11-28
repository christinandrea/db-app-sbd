<?php
include '../conn.php';

if(isset($_POST['regGuruButton'])){
    $nip = $_POST['nip'];
    $namaGuru = $_POST['namaGuru'];
    $tanggalLahirGuru = $_POST['tanggalLahirGuru'];
    $jenisKelaminGuru = $_POST['jenisKelaminGuru'];
    $alamatGuru = $_POST['alamatGuru'];
    $noTelpGuru = $_POST['noTelpGuru'];
    $query = mysqli_query($conn,"INSERT INTO guru(nip,namaGuru,tanggalLahirGuru,jenisKelaminGuru,alamatGuru,noTelpGuru) Values
    ('$nip','$namaGuru','$tanggalLahirGuru','$jenisKelaminGuru','$alamatGuru','$noTelpGuru')");
    if($query){
        header("location:guru_list.php");

    }
    else{
        echo 'Gagal';
    }
}
?>