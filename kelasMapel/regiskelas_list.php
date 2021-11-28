<?php
include '../conn.php';

$idclass = $_GET['kdkelas'];

$sched = "SELECT * FROM registrasiKelas inner join kelas on registrasiKelas.idKelas = kelas.idKelas 
inner join siswa on registrasiKelas.nis = siswa.nis
inner join guru on registrasiKelas.nipGuruWali = guru.nip
inner join kompetensi on siswa.kodeKompetensi = kompetensi.kodeKompetensi
WHERE idKelas = '$idclass'";

$q = mysqli_query($conn,$sched)

?>



<!DOCTYPE html>
<head>
    <title>Daftar Siswa</title>
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
                <h4 class="text-center"> Daftar Siswa</h4>
                <!-- <a class="btn btn-primary" href="bidangstudi.php">Ubah Jadwi</a> -->
                <?php
                        if(mysqli_num_rows($q)>0) { 
                            
                            while($data=mysqli_fetch_array($q)){
                                echo ("
                                <p> Kelas : ".$data['deskripsiKelas']." </p>
                                <p> Wali Kelas: ".$data['namaGuru']."</p>
                                <br>
                                <p>Kompetensi : ".$data['namaKompetensi']." </p>
                                <br>
                                <p>Tahun Ajaran :".$data['tahunPelajaran']."</p>
                                ");
                            }} ?> 
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nomor Induk Sekolah</th>
                            <th scope="col">Nama </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($q)>0) { 
                            
                            while($data=mysqli_fetch_array($q)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['nis']."</td>
                                <td style: 'text-align : center'>".$data['namaSiswa']."</td>
                                <td><a href='regiskelas_crud.php?nis=".$data['nis']."' class='btn btn-danger'> X </a> </td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>

