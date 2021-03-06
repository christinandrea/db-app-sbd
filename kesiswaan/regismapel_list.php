<?php
include '../conn.php';

$idsiswa = $_GET['idsiswa'];

$sched = "SELECT * FROM registrasiMapel INNER JOIN siswa on registrasiMapel.nis = siswa.nis inner join kompetensi on siswa.kodeKompetensi = kompetensi.kodeKompetensi inner join jurusan on kompetensi.kodeJurusan = jurusan.kodeJurusan inner join bidangStudi on jurusan.kodeBidangStudi = bidangStudi.kodeBidangStudi INNER JOIN kelasMataPelajaran on registrasiMapel.idKelasMapel = kelasMataPelajaran.idKelasMapel inner join mataPelajaran on kelasMataPelajaran.idMapel = mataPelajaran.idMapel where registrasiMapel.nis = '$idsiswa'";
$q = mysqli_query($conn,$sched);

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
        <div class=" mx-auto">
            <div class="card card-register my-5 card-body">
                <div>
                    <a href="kelas_list.php" class="btn btn-link">
                        Kembali
                    </a>
                </div>
                <h4 class="text-center"> Nilai Siswa</h4>
                <div>
                    <?php
                    if(mysqli_num_rows($q)>0){
                       
                        $fetch=mysqli_fetch_array($q);
                            echo("
                            <p>Nomor Induk Siswa : ".$fetch['nis']."</p>
                            <p>Nama Siswa : ".$fetch['namaSiswa']." </p>
                            <p>Bidang Studi :".$fetch['namaBidangStudi']." </p>
                            <p>Jurusan : ".$fetch['namaJurusan']."</p>
                            <p>Kompetensi :".$fetch['namaKompetensi']." </p>
                            ");
                        
                    }
                   
                    ?>
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Nilai KKM</th>
                            <th scope="col">Nilai Pengetahuan</th>
                            <th scope="col">Predikat Pengetahuan</th>
                            <th scope="col">Deskripsi Kemajuan Belajar </th>
                            <th scope="col">Nilai Keterampilan</th>
                            <th scope="col">Predikat Keterampilan</th>
                            <th scope="col">Deskripsi Kemajuan Belajar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $q2     = mysqli_query($conn, $sched);
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $nis       = $r2['namaMapel'];
                            $nilaiKKM    = $r2['nilaiKKM'];
                            $np  = $r2['nilaiPengetahuan'];
                            $pp        = $r2['predPengetahuan'];
                            $deskp     = $r2['deskripsiPengetahuan'];
                            $nk  = $r2['nilaiKeterampilan'];
                            $pk        = $r2['predKeterampilan'];
                            $desk     = $r2['deskripsiKeterampilan'];
                           
                    ?> 
                    <tr >
                                <td scope="col-12"><?php echo $nis ?></td>
                                <td scope="col-12"><?php echo $nilaiKKM ?></td>
                                <td scope="col-12"><?php echo $np ?></td>
                                <td scope="col-12"><?php echo $pp ?></td>
                                <td scope="col-12"><?php echo $deskp ?></td>
                                <td scope="col-12"><?php echo $nk ?></td>
                                <td scope="col-12"><?php echo $pk ?></td>
                                <td scope="col-12"><?php echo $desk ?></td>
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

