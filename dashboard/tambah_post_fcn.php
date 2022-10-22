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
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kontributor = $_POST['kontributor'];
$penerbit = $_POST['nama'];
$subjek = $_POST['subjek'];
$keyword = $_POST['keyword'];
$staf_input = $_POST['staf_input'];
$jenis = $_POST['jenis'];

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

$sql = "INSERT INTO `post`(`judul`, `penulis`, `kontributor`, `jenis`, `penerbit`, `subjek`, `keyword`, `staf_input`, `path`)
VALUES ('$judul', '$penulis', '$kontributor', '$jenis', '$penerbit', '$subjek', '$keyword', '$staf_input', '$file_name')";

if (mysqli_query($conn, $sql)) {
  if ($jenis == 1) {  
    header("Location: artikel.php?id=$id");
  }else if ($jenis == 1) {
    header("Location: skripsi.php?id=$id");
  }else {
    header("Location: dokeng.php?id=$id");
  }
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
