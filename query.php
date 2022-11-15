<?php
include 'koneksi.php';
$id = $_GET['id'];


$query_mysql = mysqli_query($host, "SELECT * FROM `user` WHERE `id` LIKE '$id'") or die(mysqli_error($host));

$data = mysqli_fetch_array($query_mysql);

$id = $data['id'];
$role = $data['role'];
$nama = $data['nama'];
$email = $data['email'];
$password = $data['password'];
$alamat = $data['address'];
$jenis_kelamin = $data['gender'];
$foto = $data['path'];
