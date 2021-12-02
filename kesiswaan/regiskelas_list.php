<?php
include '../conn.php';

$idclass = $_GET['kdkelas'];

$sched = "SELECT * FROM registrasiKelas inner join kelas on registrasiKelas.idKelas = kelas.idKelas inner join guru on registrasiKelas.nipGuruWali = guru.nip inner join siswa on registrasiKelas.nis = siswa.nis inner join kompetensi on siswa.kodeKompetensi = kompetensi.kodeKompetensi WHERE kelas.idKelas = '$idclass'";

$q = mysqli_query($conn,$sched);

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
            <div class="card  my-5 card-body">
                <h4 class="text-center"> Daftar Siswa</h4>
                <!-- <a class="btn btn-primary" href="bidangstudi.php">Ubah Jadwi</a> -->
                <?php
                        if(mysqli_num_rows($q)>0) { 
                            
                            $row=mysqli_fetch_array($q);
                                echo ("
                                <p> Kelas : ".$row['deskripsiKelas']." </p>
                                <p> Wali Kelas: ".$row['namaGuru']."</p>
                               
                                <p>Kompetensi : ".$row['namaKompetensi']." </p>
                               
                                <p>Tahun Ajaran :".$row['tahunAjaran']."</p>
                                ");
                        } 
                ?> 
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nomor Induk Sekolah</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col"> No. Telpon </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $q2     = mysqli_query($conn, $sched);
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $nis       = $r2['nis'];
                            $namaSiswa     = $r2['namaSiswa'];
                            $noTelpSiswa = $r2['noTelpSiswa'];
                    ?> 
                    <tr >
                                <td scope="col-12"><?php echo $nis ?></td>
                                <td scope="col-12"><?php echo $namaSiswa ?></td>
                                <td scope="col-12"><?php echo $noTelpSiswa ?></td>
                                <td><a href='regismapel.php?idsiswa=<?php echo $nis ?>' class='btn btn-warning'> Input Nilai Siswa </a> </td>
                                <td><a href='regismapel_list.php?idsiswa=<?php echo $nis ?>' class='btn btn-warning'> Lihat Nilai Siswa </a> </td>
                               
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>
