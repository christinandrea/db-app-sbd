<?php
include '../conn.php';

$query = "SELECT * from kelas";
$res = mysqli_query($conn,$query);

?>



<!DOCTYPE html>
<head>
    <title>Pendaftaran Kelas</title>
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
            
                <div class="text-center">
                    <a  class="btn btn-info">Registrasi Jadwal Kelas</a>
                    <a  class="btn btn-success">Registrasi Kelas</a>
                </div>
                </div>
        
                <div class="card card-register my-5 card-body">
                    <h3 class="text-center"> Daftar Kelas </h3>
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID Kelas</th>
                            <th scope="col">Nama Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($res)>0) { 
                            
                            while($data=mysqli_fetch_array($res)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['idKelas']."</td>
                                <td style: 'text-align : center'>".$data['deskripsiKelas']."</td>
                                <td><a href='update.php?kdkelas=".$data['idKelas']."' class='btn btn-warning'> Lihat Jadwal </a> </td>
                                <td><a href='delete.php?no_laporan=".$data['no_laporan']."' class='btn btn-danger'> Delete </a> </td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
        
                </div>
        </div>
    </div>
</body>
</html>
