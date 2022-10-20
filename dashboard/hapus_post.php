<?php
$id = $_GET['id'];
$id_post = $_GET['id_post'];
$jenis = $_GET['jenis'];
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

$sql = "DELETE FROM `post` WHERE `id` = $id_post";

// REMOVE FILE IN FOLDER
// PHP program to delete a file named gfg.txt
// using unlink() function

$query = mysqli_query($conn, "SELECT * FROM `test` WHERE `id` = $id");
$data = mysqli_fetch_array($query);

$file_pointer = $data['path'];

// Use unlink() function to delete a file
if (!unlink($file_pointer)) {
  echo ("$file_pointer cannot be deleted due to an error");
} else {
  echo ("$file_pointer has been deleted");
}

if (mysqli_query($conn, $sql)) {
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
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
