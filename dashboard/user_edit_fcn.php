<?php
include '../koneksi.php';
$id = $_GET['id'];
$ida = $_GET['ida'];
$rolea = $_GET['rolea'];
$roleb = $_GET['roleb'];
$nama = $_GET['name'];
$email = $_GET['email'];
$alamat = $_GET['alamat'];
$pekerjaan = $_GET['pekerjaan'];
$jenis_kelamin = $_GET['gender'];
$drive = $_GET['drive'];
$nid = $_GET['nid'];




mysqli_query($host, "UPDATE user SET password='$password', nama='$nama', role=$roleb,email='$email', address='$alamat', NID='$nid', gender='$jenis_kelamin' WHERE id='$id'") or die(mysqli_error($host));

header("location:data_user.php?id=$ida&role=$rolea");
