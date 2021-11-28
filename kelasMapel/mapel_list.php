<?php
include '../conn.php';

$sched = "SELECT * FROM mataPelajaran";

$q = mysqli_query($conn,$sched)

?>



<!DOCTYPE html>
<head>
    <title>Daftar Bidang Studi</title>
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
        <div class="col-sm-9 mx-auto">
            <div class="card card-register my-5 card-body">
                <h4 class="text-center"> Daftar Mata Pelajaran</h4>
                <div>
                    <a  class="btn btn-link" href="kelas_list.php">Kembali</a>
                    <a  class="btn btn-link text-end" href="mapel.php">Registrasi Mata Pelajaran</a>

                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID Mata Pelajaran</th>
                            <th scope="col">Nama Mata Pelajaran </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($q)>0) { 
                            
                            while($data=mysqli_fetch_array($q)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['idMapel']."</td>
                                <td style: 'text-align : center'>".$data['namaMapel']."</td>
                              
                                <td><a href='update_mapel.php?idmapel=".$data['idMapel']."' class='btn btn-warning'> Ubah </a> </td>
                                <td><a href='delete_mapel.php?idmapel=".$data['idMapel']."' class='btn btn-danger'> Delete </a> </td>
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>

