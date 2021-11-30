<?php
include '../conn.php';
$q = "SELECT max(idKelasMapel) as newID FROM kelasMataPelajaran";
$res = mysqli_query($conn,$q);
$data = mysqli_fetch_array($res);
$idJadwal = $data['newID'];

$kode = (int)substr($idJadwal,3,3);
$kode++;

$char = "JDK";
$newCode = $char.sprintf("%03s",$kode);
?>
<!DOCTYPE html>
<head>
    <title>Registrasi Jadwal Kelas</title>
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
                <h4 class="text-center"> Registrasi Jadwal Kelas </h4>

                <form class="form-register" action="kelasmapel_crud.php" method="post">
                <div class="form-label-group">
                        <input type="input" readonly="" name="idkelasmapel" class="form-control" value="<?php echo $newCode ?>">
                    </div>
                    <div class="form-label-group">
                        <label> Kelas </label>
                        <?php
                        include '../conn.php';
                        $s = "select * from kelas";
                        $query = mysqli_query($conn,$s) or die($s);
                       
                        ?>
                        <select name="kelas" id="kelas" class="form-control">
                        <option value="">Pilih Kelas</option>
                            <?php 
                                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)):; 
                            ?>
                            
                            <option value="<?php echo $row['idKelas'];?>"><?php echo $row['deskripsiKelas'];?></option>
                        <?php 
                            endwhile;
                        ?>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> Mata Pelajaran </label>
                        <?php
                        include '../conn.php';
                        $s = "select * from mataPelajaran";
                        $query = mysqli_query($conn,$s) or die($s);
                        ?>

                        <select name="mapel" id="mapel" class="form-control">
                            <option value="">Pilih Mata Pelajaran</option>
                            <?php 
                                while($q = mysqli_fetch_array($query,MYSQLI_ASSOC)):; 
                            ?>
                            
                            <option value="<?php echo $q['idMapel'];?>"><?php echo $q['namaMapel'];?></option>
                        <?php 
                            endwhile;
                        ?>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> Hari dan Sesi </label>
                        <?php
                        include '../conn.php';
                        $s = "select * from jadwal";
                        $query = mysqli_query($conn,$s) or die($s);
                        ?>

                        <select name="jadwal" id="jadwal" class="form-control">
                            <option value="">Pilih Hari dan Sesi</option>
                            <?php 
                                while($sch = mysqli_fetch_array($query,MYSQLI_ASSOC)):; 
                            ?>
                
                            <option value="<?php echo $sch['idJadwal'];?>"><?php echo $sch['hari'];?> - <?php echo $sch['sesi'];?></option>
                        <?php 
                            endwhile;
                        ?>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> NIP Guru </label>
                        <input type="text" name="nipguru" class="form-control" placeholder="NIP Guru">
                    </div>
                    <div class="form-label-group">
                        <label> Tahun Ajaran </label>
                        <input type="text" name="tahunajaran" class="form-control" placeholder="Tahun Ajaran">
                        <p>Contoh : 2018/2019 </p>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regJadwalKelas"> Tambah Jadwal</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>