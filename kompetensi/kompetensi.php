<!DOCTYPE html>
<head>
    <title>Kompetensi</title>
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
                <h4 class="text-center"> Daftar Kompetensi </h4>
                <div class="card">
                    <p>Ketentuan:</p>
                    <p>Format kode: Nama Kompetensi - 3 karakter </p>
                    <p>Contoh : <mark>Multimedia</mark></p>
                    <p>Kode  : <mark>MUL</mark></p>
    
                </div>
                <form class="form-register" action="kompetensi_crud.php" method="post">
                    <div class="form-label-group">
                        <label> Kode Kompetensi </label>
                        <input type="text" name="kodeKompetensi" class="form-control" placeholder="Kode Kompetensi">
                    </div>
                    <div class="form-label-group">
                        <label> Nama Kompetensi </label>
                        <input type="text" name="namaKompetensi" class="form-control" placeholder="Nama Kompetensi">
                    </div>
                    <div class="form-label-group">
                        <label> Jurusan </label>
                        <?php
                        include '../conn.php';
                        $s = "select * from jurusan";
                        $query = mysqli_query($conn,$s) or die($s);
                        ?>

                        <select name="jurusan" id="jurusan" class="form-control">
                            <option value="">Pilih Jurusan</option>
                            <?php 
                                while($q = mysqli_fetch_array($query,MYSQLI_ASSOC)):; 
                            ?>
                            
                            <option value="<?php echo $q['kodeJurusan'];?>"><?php echo $q['namaJurusan'];?></option>
                        <?php 
                            endwhile;
                        ?>
                        </select>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="regKompetensiButton"> Submit </button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>