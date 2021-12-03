<?php

include '../../conn.php';

$id = $_GET['idkelasmapel'];

$s = "SELECT * FROM kelasMataPelajaran INNER JOIN registrasiKelas on kelasMataPelajaran.idKelas = registrasiKelas.idKelas INNER JOIN kelas on registrasiKelas.idKelas = kelas.idKelas INNER JOIN siswa on registrasiKelas.nis = siswa.nis WHERE kelasMataPelajaran.idKelasMapel = '$id'";
$q = mysqli_query($conn,$s);




?>

<!DOCTYPE html>
<head>
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</style>
</head>
<body>
    <div class="container">
        <div class="col-sm-9  mx-auto">
            <div class="card card-register my-5 card-body">
                <div>
              
                    <a class="btn btn-link" href="../kelasmapel_list.php">Kembali</a>
                </div>
                <h4 class="text-center"> Data Siswa </h4>
               
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nomor Induk Siswa</th>
                            <th scope="col">Nama </th>
                         
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($q)>0) { 
                            
                            while($fetch = mysqli_fetch_array($q)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$fetch['nis']."</td>
                                <td style: 'text-align : center'>".$fetch['namaSiswa']."</td>
                                <td><a href='presensimapel.php?idsiswa=".$fetch['nis']."&&idkelasmapel=".$fetch['idKelasMapel']."' class='btn btn-success'> Presensi </a> </td>
                                <td><a href='presensi_siswa.php?idsiswa=".$fetch['nis']."&&idkelasmapel=".$fetch['idKelasMapel']."' class='btn btn-warning'> Data Presensi Siswa </a> </td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>
