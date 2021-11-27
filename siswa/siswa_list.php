<!DOCTYPE html>
<head>
    <title>Daftar Jadwal</title>
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
                <h4 class="text-center"> Daftar Jadwal </h4>
                <a class="btn btn-primary" href="jadwal.php">Tambah Jadwal</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID Jadwal</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Sesi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../conn.php';
                        $sch = mysqli_query($conn,'SELECT * FROM siswa');
                        while($fetch = mysqli_fetch_array($sch)){

                            ?>
                            <tr>
                                <!-- <td>#</td> -->
                                <td><?php echo $fetch['nis']; ?></td>
                                <td><?php echo $fetch['hari']; ?></td>
                                <td><?php echo $fetch['sesi']; ?></td>
                                <td>
                                    <button class="btn btn-warning" type="submit" name="updateJadwal">Ubah</button>
                                    <button class="btn btn-danger" type="submit" name="hapusJadwal">Hapus</button>
                                </td>
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

<?php
include '../conn.php';


?>