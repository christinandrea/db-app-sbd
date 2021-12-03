<?php
    include '../conn.php';
    $s = "SELECT * FROM kelasMataPelajaran inner join kelas on kelasMataPelajaran.idKelas = kelas.idKelas inner join mataPelajaran on kelasMataPelajaran.idMapel = mataPelajaran.idMapel inner join guru on kelasMataPelajaran.nip = guru.nip inner join jadwal on kelasMataPelajaran.idJadwal = jadwal.idJadwal";
    $query = mysqli_query($conn,$s) or die($s);


    $nis = $_GET['idsiswa'];
    $id = "SELECT nis from siswa where nis='$nis'";
    $q = mysqli_query($conn,$id);
    $fetch = mysqli_fetch_array($q);
                       
?>

<!DOCTYPE html>
<head>
    <title>Registrasi Nilai Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-register my-5 card-body">
                <h4 class="text-center">Registrasi Nilai Mata Pelajaran </h4>

                <form class="form-register" action="regismapel_crud.php" method="post">
                    <div class="form-label-group">
                        <label> Nomor Induk Siswa </label>
                        <input type="text" readonly="" name="nis" class="form-control" value=<?php echo $nis ?>>
                    </div>
                    <div class="form-label-group">
                        <label> Jadwal </label>
                       
                        <select name="jadwal" id="jadwal" class="form-control">
                        <option value="">Pilih Jadwal</option>
                            <?php 
                                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)):; 
                            ?>
                            
                            <option value="<?php echo $row['idKelasMapel'];?>"><?php echo $row['deskripsiKelas'];?> -- <?php echo $row['namaMapel'];?> -- <?php echo $row['hari'];?> <?php echo $row['sesi'];?></option>
                        <?php 
                            endwhile;
                        ?>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> Nilai KKM </label>
                        <input type="text" name="nkkm" class="form-control" placeholder="Nilai KKM">
                    </div>
                    <div class="form-label-group">
                        <label> Nilai Pengetahuan </label>
                        <input type="text" name="np" class="form-control" placeholder="Nilai Pengetahuan">
                    </div>
                    <div class="form-label-group">
                        <label> Predikat  </label>
                        <input type="text" name="predpeng" class="form-control" placeholder="Predikat">
                       
                    </div>
                    <div class="form-label-group">
                        <label> Deskripsi </label>
                        <input type="text" name="deskpeng" class="form-control" placeholder="Deskripsi">
                    </div>
                    <div class="form-label-group">
                        <label> Nilai Keterampilan </label>
                        <input type="text" name="nk" class="form-control" placeholder="Nilai Keterampilan">
                    </div>
                    <div class="form-label-group">
                        <label> Predikat  </label>
                        <input type="text" name="predket" class="form-control" placeholder="Predikat">
                    </div>
                    <div class="form-label-group">
                        <label> Deskripsi </label>
                        <input type="text" name="deskket" class="form-control" placeholder="Deskripsi">
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regMapelButton"> Tambahkan Nilai</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>