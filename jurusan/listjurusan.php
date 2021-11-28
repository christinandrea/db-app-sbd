<?php
include '../conn.php';
$sch = mysqli_query($conn,'SELECT * FROM jurusan inner join bidangStudi on jurusan.kodeBidangStudi = bidangStudi.kodeBidangStudi');

?>



<!DOCTYPE html>
<head>
    <title>Data Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</style>
</head>
<body>
<div class="col-sm-9 mx-auto">
            <div class="card card-register my-5 card-body">
            <div>
            <a class="btn btn-link" href="../index.php">Kembali</a>
            </div>
                <div class="text-center">
                    <h1>Data Jurusan</h1>
                    <a  class="btn btn-primary" href="../bidangstudi/listbidangstudi.php">Bidang Studi</a>
                    <a  class="btn btn-primary" href="">Jurusan</a>
                    <a href="../kompetensi/listkompetensi.php" class="btn btn-primary">Kompetensi</a>
            </div>
        </div>
    <div class="container">
        <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
            <div class="card card-register my-5 card-body">
                <h4 class="text-center"> Data Jurusan</h4>
                <div>
                <a class="btn btn-primary" href="jurusan.php">+ Jurusan</a>
                </div>
               
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Bidang Studi</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($sch)>0) { 
                            
                            while($data=mysqli_fetch_array($sch)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['kodeJurusan']."</td>
                                <td style: 'text-align : center'>".$data['namaJurusan']."</td>
                                <td style: 'text-align : center'>".$data['namaBidangStudi']."</td>
                                <td><a href='update.php?idjurusan=".$data['kodeJurusan']."' class='btn btn-warning'> Ubah </a> </td>
                                <td><a href='delete.php?idjurusan=".$data['kodeJurusan']."' class='btn btn-danger'> Delete </a> </td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>

