<?php
include '../conn.php';
$sch = mysqli_query($conn,'SELECT * FROM guru');

?>



<!DOCTYPE html>
<head>
    <title>Data Guru</title>
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
        <div class="col-sm-9  mx-auto">
            <div class="card card-register my-5 card-body">
                <h4 class="text-center"> Data Guru </h4>
                <a class="btn btn-primary" href="guru.php">+ Data Guru</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat </th>
                            <th scope="col">No. Telpon</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($sch)>0) { 
                            
                            while($data=mysqli_fetch_array($sch)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['nip']."</td>
                                <td style: 'text-align : center'>".$data['namaGuru']."</td>
                                <td style: 'text-align : center'>".$data['tanggalLahirGuru']."</td>
                                <td style: 'text-align : center'>".$data['jenisKelaminGuru']."</td>
                                <td style: 'text-align : center'>".$data['AlamatGuru']."</td>
                                <td style: 'text-align : center'>".$data['noTelpGuru']."</td>
                                <td><a href='update.php?idguru=".$data['nip']."' class='btn btn-warning'> Ubah </a> </td>
                                <td><a href='delete.php?idguru=".$data['nip']."' class='btn btn-danger'> X </a> </td>
                                ");
                            }} ?> 
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