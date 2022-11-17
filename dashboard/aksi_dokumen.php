<?php

// Upload to databses
$id = $_GET['id'];
$id_prop = $_GET['id_prop'];
$role = $_GET['role'];
$pesan = $_GET['pesan'];


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


if ($pesan == 1) {
    $sql = "UPDATE `post` SET `status` = '1' WHERE `post`.`id` = $id_prop";
}else if ($pesan == 2) {
    $sql = "UPDATE `post` SET `status` = '2' WHERE `post`.`id` = $id_prop";
}else if ($pesan == 3) {
    $sql = "UPDATE `post` SET `status` = '0' WHERE `post`.`id` = $id_prop";
}else if ($pesan == 4) {
    $sql = "DELETE FROM `post` WHERE `id` = $id_prop";
}else {
    $sql = "UPDATE `post` SET `status` = '1' WHERE `post`.`id` = $id_prop";
}


if (mysqli_query($conn, $sql)) {
    header("Location: antrian_dokumen.php?id=$id&role=$role");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}