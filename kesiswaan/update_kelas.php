<?php
include '../conn.php';

if(isset($_POST['update'])){
    $id = $_GET['kdkelas'];

    $name = $_POST['nmkelas'];

    $upd = "UPDATE kelas SET deskripsiKelas = '$name' where idKelas = '$id'";
    $q = mysqli_query($conn,$upd);

    if($q){
        header("location:kelas_list.php");
    }
}
?>




<!DOCTYPE html>
<head>
    <title>Pembaharuan Nama Kelas</title>
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
            
       
            <div class="card card-register my-5 card-body">
            
            
                <h4 class="text-center"> Pembaharuan Nama Kelas </h4>
                
                    <div class="form-label-group">
                        <label> Nama Kelas </label>
                        <input type="text" name="nmkelas" class="form-control" placeholder="Nama Kelas">
                    </div>
                    
                    <br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="update"> Ubah </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
