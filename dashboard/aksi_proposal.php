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
    $sql = "UPDATE `proposal` SET `status` = '1' WHERE `proposal`.`id` = $id_prop";
}else if ($pesan == 2) {
    $sql = "UPDATE `proposal` SET `status` = '2' WHERE `proposal`.`id` = $id_prop";
}else if ($pesan == 3) {
    $sql = "UPDATE `proposal` SET `status` = '0' WHERE `proposal`.`id` = $id_prop";
}else {
    $sql = "UPDATE `proposal` SET `status` = '1' WHERE `proposal`.`id` = $id_prop";
}


if (mysqli_query($conn, $sql)) {
    header("Location: antrian_proposal.php?id=$id&role=$role");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}