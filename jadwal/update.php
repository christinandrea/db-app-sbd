<?php
include '../conn.php';
if(isset($_POST['update'])){
    $id = $_GET['idjadwal'];
    $day = $_POST['hari'];
    $sesi = $_POST['sesi'];
    
    $q = "UPDATE jadwal SET hari='$day', sesi='$sesi' WHERE idJadwal='$id'";
    $c = mysqli_query($conn,$q);
    
    if($q){
        header("location:jadwal_list.php");
    }
}


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

                <form class="form-register"  method="post">
                    <!-- <div class="form-label-group">
                        <label> IdJadwal </label>
                        <input type="text" readonly="" name="idjadwal" class="form-control" value=".$row['idJadwal']">
                    </div> -->
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
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="update"> Ubah Jadwal</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
