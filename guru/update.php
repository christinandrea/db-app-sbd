<?php
include '../conn.php';
if(isset($_POST['update'])){
    $id = $_GET['idguru'];
    $nip = $_POST['nip'];
    $namaGuru = $_POST['namaGuru'];
    $tanggalLahirGuru = $_POST['tanggalLahirGuru'];
    $jenisKelaminGuru = $_POST['jenisKelaminGuru'];
    $alamatGuru = $_POST['alamatGuru'];
    $noTelpGuru = $_POST['noTelpGuru'];
    
    $q = "UPDATE guru SET nip = '$nip', namaGuru ='$namaGuru',tanggalLahirGuru = '$tanggalLahirGuru', jenisKelaminGuru = '$jenisKelaminGuru',alamatGuru='$alamatGuru',noTelpGuru = '$noTelpGuru' 
    WHERE nip='$id'";
    $c = mysqli_query($conn,$q);
    
    if($q){
        header("location:guru_list.php");
    }
}


?>

<!DOCTYPE html>
<head>
    <title>Pembaharuan Data Guru</title>
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
                <h4 class="text-center">Pembaharuan Data Guru</h4>
                <form class="form-register" method="post">
                    <div class="form-label-group">
                        <label> Nomor Identitas Pegawai </label>
                        <input type="text" name="nip" class="form-control" placeholder="Nomor Identitas Pegawai">
                    </div>
                    <div class="form-label-group">
                        <label> Nama </label>
                        <input type="text" name="namaGuru" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-label-group">
                        <label> Tanggal Lahir </label>
                        <input type="date" name="tanggalLahirGuru" class="form-control">
                    </div>
                    <div class="form-label-group">
                        <label> Jenis Kelamin </label>
                        <select name="jenisKelaminGuru" id="jenisKelaminGuru" class="form-control" >
                            <option values=" ">--Jenis Kelamin</option>
                            <option values="L">Laki-laki</option>
                            <option values="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> Alamat </label>
                        <input type="text" name="alamatGuru" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-label-group">
                        <label> No.Telp </label>
                        <input type="text" name="noTelpGuru" class="form-control" placeholder="No.Telp">
                    </div>                    
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="update"> Ubah </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

