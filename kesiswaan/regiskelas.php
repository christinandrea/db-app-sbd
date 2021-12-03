<?php
    include '../conn.php';
    $nis = $_GET['idsiswa'];
    $id = "SELECT nis from siswa where nis='$nis'";
    $q = mysqli_query($conn,$id);
    $fetch = mysqli_fetch_array($q);
                       
?>


<!DOCTYPE html>
<head>
    <title>Registrasi Kelas</title>
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
                <h4 class="text-center">Registrasi Kelas </h4>

                <form class="form-register" action="regiskelas_crud.php" method="post">
                    <div class="form-label-group">
                        <label> Nomor Induk Siswa </label>
                        <input type="text" readonly="" name="nis" class="form-control" value="<?php echo $fetch['nis'] ?>">
                    </div>
                    <div class="form-label-group">
                        <label> Kelas </label>
                        <?php
                        include '../conn.php';
                        $s = "select * from kelas";
                        $query = mysqli_query($conn,$s) or die($s);
                       
                        ?>
                        <select name="kelas" id="kelas" class="form-control">
                        <option value="">Pilih Kelas</option>
                            <?php 
                                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)):; 
                            ?>
                            
                            <option value="<?php echo $row['idKelas'];?>"><?php echo $row['deskripsiKelas'];?></option>
                        <?php 
                            endwhile;
                        ?>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> NIP Wali Kelas </label>
                        <input type="text" name="nipwkelas" class="form-control" placeholder="Wali Kelas">
                    </div>

                    <div class="form-label-group">
                        <label> Tahun Ajaran </label>
                        <input type="text" name="tahunajaran" class="form-control" placeholder="Tahun Ajaran">
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regKelasButton"> + </button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-register my-5 card-body">
          
                <h4 class="text-center"> Data Guru </h4>
               
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include '../conn.php';
                    $sch = mysqli_query($conn,'SELECT * FROM guru');
                    
                        if(mysqli_num_rows($sch)>0) { 
                            
                            while($data=mysqli_fetch_array($sch)){
                                echo ("
                                <tr>
                                <td style: 'text-align : center'>".$data['nip']."</td>
                                <td style: 'text-align : center'>".$data['namaGuru']."</td>
                                
                                ");
                            }} ?> 
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</body>
</html>