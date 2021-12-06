<?php

include '../../conn.php';


$idsiswa = $_GET['idsiswa'];
$idkelasmapel = $_GET['idkelasmapel'];

$s = "SELECT * FROM presensiMapel INNER JOIN siswa on presensiMapel.nis = siswa.nis INNER JOIN kelasMataPelajaran ON kelasMataPelajaran.idKelasMapel = presensiMapel.idKelasMapel WHERE siswa.nis='$idsiswa' AND kelasMataPelajaran.idKelasMapel='$idkelasmapel'";
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
                    <a class="btn btn-link" href="../kelas_list.php">Kembali</a>
                </div>
                <h4 class="text-center"> Data Presensi Siswa </h4>
               
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nomor Induk Siswa</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Tanggal Pertemuan </th>
                            <th scope="col">Status </th>
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
                                <td style: 'text-align : center'>".$fetch['tanggalPertemuan']."</td>
                                <td style: 'text-align : center'>".$fetch['status']."</td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>
