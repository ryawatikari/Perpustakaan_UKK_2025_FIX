<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "pustaka1";

$koneksi = mysqli_connect($host, $user, $password, $database);

//cek koneksi
if (!$koneksi){
    die("koneksi gagal : ". mysqli_connect_error());
}
?>