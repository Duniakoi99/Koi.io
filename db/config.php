<?php
    $connect = mysqli_connect("localhost","root","","duniakoi");
    
    if(mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>