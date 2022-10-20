<?php
include '../koneksi.php';
$id = $_GET['id'];
// $role = $_GET['role'];
$nama = $_GET['nama'];
$email = $_GET['email'];
$alamat = $_GET['alamat'];
// $pekerjaan = $_GET['pekerjaan'];

// $jenis_kelamin = 0;
// if ($_GET['jenis_kelamin'] == "Perempuan" or $_GET['jenis_kelamin'] == "perempuan" or $_GET['jenis_kelamin'] == "Wanita" or $_GET['jenis_kelamin'] == "wanita") {
//     $jenis_kelamin = 2;
// } else if ($_GET['jenis_kelamin'] == "Laki-Laki" or $_GET['jenis_kelamin'] == "Laki-Laki" or $_GET['jenis_kelamin'] == "laki-laki" or $_GET['jenis_kelamin'] == "laki-laki" or $_GET['jenis_kelamin'] == "Lelaki" or $_GET['jenis_kelamin'] == "lelaki") {
//     $jenis_kelamin = 1;
// };
$jenis_kelamin = $_GET['gender'];




mysqli_query($host, "UPDATE user SET email='$email', nama='$nama', address='$alamat', gender='$jenis_kelamin' WHERE id='$id'") or die(mysqli_error($host));

header("location:profil.php?id=$id");
