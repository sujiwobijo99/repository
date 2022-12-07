<?php
include '../koneksi.php';
$id = $_GET['id'];
$role = $_GET['role'];
$rolea = $_GET['rolea'];
$nama = ucfirst($_GET['nama']);
$email = $_GET['email'];
$password = $_GET['password'];
$alamat = ucfirst($_GET['alamat']);
$nid = $_GET['nid'];
$jenis_kelamin = $_GET['gender'];


mysqli_query($host, "INSERT INTO `user` (`id`, `nama`, `email`, `password`, `address`, `NID`, `gender`, `role`) VALUES (NULL, '$nama', '$email', '$password', '$alamat', '$nid', '$jenis_kelamin', '$rolea');") or die(mysqli_error($host));

header("location:data_user.php?id=$id&role=$role");
