<?php

// Upload to databses
$id = $_POST['id'];
$role = $_POST['role'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$dosbim = $_POST['dosbim'];
$keyword = $_POST['keyword'];
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

$sql = "INSERT INTO `proposal` (`judul`, `penulis`, `pembimbing`, `status`, `keyword`, `abstrak`, `tgl_input`)
VALUES ('$judul', '$penulis', '$dosbim', 0, '$keyword', '$abstrak', '$tgl_input')";

if (mysqli_query($conn, $sql)) {
    header("Location: status__ajuan.php?id=$id&role=$role");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
