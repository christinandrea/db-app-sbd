<?php
include '../conn.php';
$sch = mysqli_query($conn,'SELECT * FROM siswa inner join kompetensi on siswa.kodeKompetensi = kompetensi.kodeKompetensi');

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
        <div class="mx-auto">
            <div class="card card-register my-5 card-body">
                <div>
                    <a class="btn btn-link" href="../index.php">Kembali</a>
                </div>
                <h4 class="text-center"> Data Siswa </h4>
                <div>
                <a class="btn btn-primary" href="siswa.php"> + Data Siswa</a>
                
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nomor Induk Siswa</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. Telpon</th>
                            <th scope="col">Nama Orang Tua</th>
                            <th scope="col">Kompetensi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($sch)>0) { 
                            
                            while($data=mysqli_fetch_array($sch)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['nis']."</td>
                                <td style: 'text-align : center'>".$data['namaSiswa']."</td>
                                <td style: 'text-align : center'>".$data['tanggalLahirSiswa']."</td>
                                <td style: 'text-align : center'>".$data['jenisKelaminSiswa']."</td>
                                <td style: 'text-align : center'>".$data['alamatSiswa']."</td>
                                <td style: 'text-align : center'>".$data['noTelpSiswa']."</td>
                                <td style: 'text-align : center'>".$data['namaOrangTua']."</td>
                                <td style: 'text-align : center'>".$data['namaKompetensi']."</td>
                                <td><a href='../kesiswaan/regiskelas.php?idsiswa=".$data['nis']."' class='btn btn-link'> Registrasi Kelas </a> </td>
                                <td><a href='update.php?idsiswa=".$data['nis']."' class='btn btn-warning'> Ubah </a> </td>
                                <td><a href='delete.php?idsiswa=".$data['nis']."' class='btn btn-danger'> X </a> </td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>

