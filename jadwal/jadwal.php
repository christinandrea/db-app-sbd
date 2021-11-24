<?php
include '../conn.php';
$q = "SELECT max(idJadwal) as newID FROM jadwal";
$res = mysqli_query($conn,$q);
$data = mysqli_fetch_array($res);
$idJadwal = $data['newID'];

$kode = (int)substr($idJadwal,3,3);
$kode++;

$char = "SCH";
$newCode = $char.sprintf("%03s",$kode);
?>
<!DOCTYPE html>
<head>
    <title>Jadwal</title>
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
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-register my-5 card-body">
                <h4 class="text-center">Jadwal </h4>

                <form class="form-register" action="jadwal_crud.php" method="post">
                    <div class="form-label-group">
                        <label> IdJadwal </label>
                        <input type="text" readonly="" name="idjadwal" class="form-control" value="<?php echo $newCode ?>">
                    </div>
                    <div class="form-label-group">
                        <label> Hari  </label>
                        <select name="hari" id="Hari" class="form-control">
                            <option value="" disabled selected >--Pilih Hari </option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> Sesi </label>
                        <input type="text" name="sesi" class="form-control"placeholder="Masukkan Sesi">
                        <p>1 sesi = 45 menit</p>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regJadwalButton"> Tambahkan Jadwal</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-register my-5 card-body">
                <h4 class="text-center"> Daftar Jadwal </h4>

                
            </div>
        </div>
    </div>
</body>
</html>