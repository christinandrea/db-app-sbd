<?php
include '../conn.php';

if(isset($_POST['update'])){
    $id = $_GET['idsiswa'];

    $nis = $_POST['nis'];
    $nama = $_POST['namasiswa'];
    $ttl = $_POST['ttl'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamatsiswa'];
    $telpsiswa = $_POST['telpsiswa'];
    $namaortu = $_POST['namaortu'];
    $kodekompetensi = mysqli_real_escape_string($conn,$_POST['kompetensi']);

    $upd = "UPDATE siswa SET nis='$nis',namaSiswa='$nama', tanggalLahirSiswa = '$ttl', jenisKelaminSiswa='$jeniskelamin', alamatSiswa = '$alamat', noTelpSiswa = '$telpsiswa', namaOrangTua = '$namaortu', kodeKompetensi = '$kodekompetensi' where nis = '$id'";
    $q = mysqli_query($conn,$upd);

    if($q){
        header("location:siswa_list.php");
    }
}

?>





<!DOCTYPE html>
<head>
    <title>Siswa</title>
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
                <h4 class="text-center">Siswa </h4>

                <form class="form-register" action="mapel_crud.php" method="post">
                    <div class="form-label-group">
                        <label> NIS </label>
                        <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS Siswa">
                    </div>
                    <div class="form-label-group">
                        <label> Nama Siswa </label>
                        <input type="text" name="namasiswa" class="form-control" placeholder="Masukkan Nama Siswa">
                    </div>
                    <div class="form-label-group">
                        <label> Tanggal Lahir Siswa </label>
                        <input type="date" name="ttl" class="form-control">
                    </div>
                    <div class="form-label-group">
                        <label> Jenis Kelamin</label>
                        <select name=jeniskelamin id="jeniskelamin" class="form-control">
                            <option value="">--Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-label-group">
                        <label> Alamat Siswa </label>
                        <input type="text" name="alamatsiswa" class="form-control" placeholder="Alamat Siswa">
                    </div>
                    <div class="form-label-group">
                        <label> No Telepon Siswa </label>
                        <input type="text" name="telpsiswa" class="form-control" placeholder="(08xxxxxxxxx)">
                    </div>
                    <div class="form-label-group">
                        <label> Nama Orang Tua Siswa </label>
                        <input type="text" name="namaortu" class="form-control" placeholder="Masukkan Nama Orang Tua">
                    </div>
                    <div class="form-label-group">
                        <label> Kompetensi </label>
                        <?php
                        include '../conn.php';
                        $s = "select * from kompetensi";
                        $query = mysqli_query($conn,$s) or die($s);
                        ?>

                        <select name="kompetensi" id="kompetensi" class="form-control">
                            <option value="">Pilih Kompetensi</option>
                            <?php 
                                while($q = mysqli_fetch_array($query,MYSQLI_ASSOC)):; 
                            ?>
                            
                            <option value="<?php echo $q['kodeKompetensi'];?>"><?php echo $q['namaKompetensi'];?></option>
                        <?php 
                            endwhile;
                        ?>
                        </select>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="update"> Ubah </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>