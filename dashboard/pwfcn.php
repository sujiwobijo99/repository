<?php
include '../koneksi.php';
$id = $_GET['id'];
$role = $_GET['role'];
$password = $_GET['password_new'];

mysqli_query($host, "UPDATE user SET password='$password' WHERE id='$id'") or die(mysqli_error($host));

header("location:ubah_pw.php?id=$id");
