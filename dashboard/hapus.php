<?php
include '../koneksi.php';
$id = $_GET['id'];
$role = $_GET['role'];
$ida = $_GET['ida'];
$rolea = $_GET['rolea'];
mysqli_query($host, "DELETE FROM user WHERE id='$id'") or die(mysqli_error($host));

header("location:data_user.php?id=$ida&role=$rolea");
