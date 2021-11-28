<?php
include '../conn.php';
$sch = mysqli_query($conn,'SELECT * FROM bidangStudi');

?>



<!DOCTYPE html>
<head>
    <title>Data Bidang Studi</title>
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
                    <h1>Data Bidang Studi</h1>
                    <a  class="btn btn-primary" href="">Bidang Studi</a>
                    <a  class="btn btn-primary" href="../jurusan/listjurusan.php">Jurusan</a>
                    <a href="../kompetensi/listkompetensi.php" class="btn btn-primary">Kompetensi</a>
            </div>
        </div>
    <div class="container">
        <div class="col-sm-9  mx-auto">
            <div class="card card-register my-5 card-body">
                <h4 class="text-center"> Data Bidang Studi</h4>
                <div>
                <a class="btn btn-primary" href="bidangstudi.php">+ Bidang Studi</a>
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama </th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($sch)>0) { 
                            
                            while($data=mysqli_fetch_array($sch)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['kodeBidangStudi']."</td>
                                <td style: 'text-align : center'>".$data['namaBidangStudi']."</td>
                                <td><a href='update_bidangstudi.php?idbidang=".$data['kodeBidangStudi']."' class='btn btn-warning'> Ubah </a> </td>
                                <td><a href='delete_bidangstudi.php?idbidang=".$data['kodeBidangStudi']."' class='btn btn-danger'> Delete </a> </td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>

