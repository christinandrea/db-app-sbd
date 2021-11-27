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
                        <label> IdKelasMapel </label>
                        <input type="text" name="idkelasmapel" class="form-control" placeholder="Masukkan ID kelas">
                    </div>
                    <div class="form-label-group">
                        <label> Tanggal Pertemuan </label>
                        <input type="date" name="tanggalpertemuan" class="form-control">
                    </div>
                    <div class="form-label-group">
                        <label> Predikat  </label>
                        <select name="presensi" id="presensi" class="form-control" placeholder="Pilih Keterangan">
                            <option value=""disabled selected>--Pilih keterangan</option>
                            <option value="hadir">Hadir</option>
                            <option value="tidakhadir">Tidak Hadir</option>
                        </select>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regMapelButton"> Tambahkan Nilai</button>
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