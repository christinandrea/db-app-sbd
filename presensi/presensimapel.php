<!DOCTYPE html>
<head>
    <title>Presensi Mapel</title>
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
                <h4 class="text-center">Presensi Mapel </h4>

                <form class="form-register" action="regismapel_crud.php" method="post">
                    <div class="form-label-group">
                        <label> Nomor Induk Siswa </label>
                        <input type="text" name="nis" class="form-control" placeholder="Nomor Induk Siswa">
                    </div>
                    <div class="form-label-group">
                        <label> Kelas </label>
                        <?php
                        include '../conn.php';
                        $s = "select kelasMataPelajaran.idKelasMapel,kelas.deskripsiKelas,jadwal.hari,jadwal.sesi from kelasMataPelajaran inner join kelas on kelasMataPelajaran.idKelas = kelas.idKelas 
                        inner join jadwal on kelasMataPelajaran.idJadwal = jadwal.idJadwal ";
                        $query = mysqli_query($conn,$s) or die($s);
                       
                        ?>
                        <select name="kelas" id="kelas" class="form-control">
                        <option value="">Pilih Kelas Mata Pelajaran</option>
                            <?php 
                                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)):; 
                            ?>
                            <option value="<?php echo $row['idKelasMapel'];?>"><?php echo $row['deskripsiKelas'];?> - <?php echo $row['hari'];?>   <?php echo $row['sesi'];?> </option>
                        <?php 
                            endwhile;
                        ?>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> Tanggal Pertemuan </label>
                        <input type="date" name="tanggalpertemuan" class="form-control">
                    </div>
                    <div class="form-label-group">
                        <label> Keterangan  </label>
                        <select name="presensi" id="presensi" class="form-control" placeholder="Pilih Keterangan">
                            <option value=""disabled selected>--Pilih keterangan</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak hadir">Tidak Hadir</option>
                        </select>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regPresensiButton"> + </button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-register my-5 card-body">
                <h4 class="text-center">Presensi Mapel </h4>
            </div>
        </div>
    </div>
</body>
</html>