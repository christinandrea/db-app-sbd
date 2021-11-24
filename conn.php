<?php 

    $host = 'localhost';
    $username = 'root';
    $pw = '';
    $dbname = 'sekolah';

    $conn = mysqli_connect($host,$username,$pw,$dbname);

    if(mysqli_connect_errno()){
        echo "Connection failed:". mysqli_connect_error();

    }

  
?>