<?php
include '../conn.php';

$idclass = $_GET['kdkelas'];

$sched = "SELECT * FROM kelasMataPelajaran inner join kelas on kelasMataPelajaran.idKelas = kelas.idKelas inner join mataPelajaran on kelasMataPelajaran.idMapel = mataPelajaran.idMapel inner join guru on kelasMataPelajaran.nip = guru.nip inner join jadwal on kelasMataPelajaran.idJadwal = jadwal.idJadwal where kelasMataPelajaran.idKelas = '$idclass'";

$q = mysqli_query($conn,$sched)

?>



<!DOCTYPE html>
<head>
    <title>Daftar Bidang Studi</title>
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
        <div class="col-sm-9 mx-auto">
            <div class="card card-register my-5 card-body">
                <div>
                    <a href="kelas_list.php" class="btn btn-link">
                        Kembali
                    </a>
                </div>
                <h4 class="text-center"> Jadwal Kelas</h4>
                <!-- <a class="btn btn-primary" href="bidangstudi.php">Ubah Jadwi</a> -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Mata Pelajaran </th>
                            <th scope="col">Guru </th>
                            <th scope="col">Hari </th>
                            <th scope="col">Sesi </th>
                            <th scope="col">Tahun Ajaran </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($q)>0) { 
                            
                            while($data=mysqli_fetch_array($q)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['deskripsiKelas']."</td>
                                <td style: 'text-align : center'>".$data['namaMapel']."</td>
                                <td style: 'text-align : center'>".$data['namaGuru']."</td>
                                <td style: 'text-align : center'>".$data['hari']."</td>
                                <td style: 'text-align : center'>".$data['sesi']."</td>
                                <td style: 'text-align : center'>".$data['tahunPelajaran']."</td>
                                <td><a href='update_kelasmapel.php?idkelasmapel=".$data['idKelasMapel']."' class='btn btn-warning'> Ubah </a> </td>
                                <td><a href='delete_kelasmapel.php?idkelasmapel=".$data['idKelasMapel']."' class='btn btn-danger'> Delete </a> </td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>

