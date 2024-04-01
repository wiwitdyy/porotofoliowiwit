<?php
include "config.php";

    //proses menampung data pada form input
    $Name = $_POST['nama'];
    $Email= $_POST ['email'];
    $Message = $_POST['textboxs'];
    
    //buat query untuk memasukkan data ke tabel message
    $sql = "INSERT INTO send VALUES('$Name','$Email','$Message')";
    $query = mysqli_query($conn,$sql);

    //proses untuk mengecek apakah proses simpan berhasil?
    if($query){
        header("location:index.php"); //Jika berhasil akan menuju page index.php 
    }   
        else{
            echo "Sorry, message could not be sent"; //Jika tidak maka akan menampilkan pesan gagal
        }
    
  ?>