<?php

$targetfolder = "post/";

$targetfolder = $targetfolder . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {

  echo "The file " . basename($_FILES['file']['name']) . " is uploaded";
} else {

  echo "Problem uploading file";
}


// Upload to databses
$file_name = $_FILES['file']['name'];
$id = $_POST['id'];
$role = $_POST['role'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kontributor = $_POST['kontributor'];
$penerbit = $_POST['penerbit'];
$subjek = $_POST['subjek'];
$keyword = $_POST['keyword'];
$staf_input = $_POST['staf_input'];
$jenis = $_POST['jenis'];
$abstrak = $_POST['abstrak'];
$tgl_input = date('Y-m-d');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "repository";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($role == 1) {
  $sql = "INSERT INTO `post`(`judul`, `penulis`, `kontributor`, `jenis`, `penerbit`, `subjek`, `keyword`, `staf_input`, `path`, `abstrak`, `tgl_input`, `status`)
VALUES ('$judul', '$penulis', '$kontributor', '$jenis', '$penerbit', '$subjek', '$keyword', '$staf_input', '$file_name', '$abstrak', '$tgl_input', '1')";
} else {
  $sql = "INSERT INTO `post`(`judul`, `penulis`, `kontributor`, `jenis`, `penerbit`, `subjek`, `keyword`, `staf_input`, `path`, `abstrak`, `tgl_input`, `status`)
VALUES ('$judul', '$penulis', '$kontributor', '$jenis', '$penerbit', '$subjek', '$keyword', 'Mahasiswa', '$file_name', '$abstrak', '$tgl_input', '0')";
}

if (mysqli_query($conn, $sql)) {
  if ($jenis == 1) {  
    header("Location: artikel.php?id=$id&role=$role");
  }else if ($jenis == 2) {
    header("Location: skripsi.php?id=$id&role=$role");
  }else {
    header("Location: dokeng.php?id=$id&role=$role");
  }
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
