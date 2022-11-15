<?php
include '../koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];

$query_mysql = mysqli_query($host, "SELECT * FROM `user` WHERE `email` LIKE '$email' AND `password` LIKE '$password'") or die(mysqli_error($host));

$data = mysqli_fetch_array($query_mysql);
$id = $data['id'];
$role = $data['role'];

if (isset($id)) {
    if ($id == 1) {
        header("location:index.php?id=$id&role=$role");
    } else {
        header("location:profil.php?id=$id&role=$role");
    }
    
} else {
    header("location:login.php?pesan=1");
}
