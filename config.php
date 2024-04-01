<?php
//mysqli_connect("mysql_host". "mysql_username", "mysql_password", "database");

$conn = mysqli_connect("localhost", "root", "", "ukm");
if(mysqli_connect_errno())
{
    echo "koneksi gagal". mysqli_connect_error();
}
?>