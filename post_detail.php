<?php
include "koneksi.php";

$id = $_GET['id'];


$query_mysql = mysqli_query($host, "SELECT * FROM `post` WHERE `id`='$id'") or die(mysqli_error($host));

$data = mysqli_fetch_array($query_mysql);

$id = $data['id'];
$judul = $data['judul'];
$penulis = $data['penulis'];
$kontributor = $data['kontributor'];
$jenis = $data['jenis'];
$penerbit = $data['penerbit'];
$subjek = $data['subjek'];
$keyword = $data['keyword'];
$staf_input = $data['staf_input'];
$tgl_input = $data['tgl_input'];
$path = $data['path'];
$abstrak = $data['abstrak'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Repository Teknik Elektro Unsika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom fonts for this template-->
    <link rel="icon" href="dashboard/img/logo_unsika.png"  type="image/x-icon">
    <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

  </head>
  <body>
  <div class="card text-center">
  <div class="card-header" style="background-color:  #003cb3;">
<div style="text-align:left; margin-left: 5vw;">
<i class="fas fa-envelope" style="color: gold;"></i>  
<a aria-current="page" href="#" style="display: inline; text-decoration: none; color: white; opacity:0.6;">info@ft.unsika.ac.id</a>

<i class="fas fa-phone" style="margin-left: 2vw;color: gold;"></i>  
<a aria-current="page" href="#" style="display: inline; text-decoration: none; color: white; opacity:0.6;">+62 857 1810 6778</a>
</div>       

<nav class="navbar navbar-expand-lg" style="background-color:  #003cb3; position:sticky !important">

  <div class="container-fluid">
  <a class="navbar-brand" href="#" style="margin-left: 3vw;"><img src="dashboard/img/header unsika.png" alt="" width="500vw"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="margin-left: 35vw;">
        <li class="nav-item">
          <a class="nav-link" href="dashboard/login.php" style="font-size: x-large; font-weight: 500; color:azure; opacity:0.6;">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>
  
  <div class="card-body">
  <div class="card" style="width: 90vw; text-align:left; margin-left:4vw; margin-bottom: 3vh; box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);">
  <div class="card-body" style="text-decoration: none; color: #1a8cff">
    
    <h3 class="card-title"><?php echo $data['judul']; ?></h3>
    <table class="table" style="font-size:1.2rem;">
 <tbody>
    <tr>
      <td style="width:30vw;">Penulis</td>
      <td>: <?php echo $penulis ?></td>
    </tr>
    <tr>
      <td>Kontributor / Dosen pembimbing</td>
      <td>: <?php echo $kontributor ?></td>
    </tr>
    <tr>
      <td>Penerbit</td>
      <td>: <?php echo $penerbit ?></td>
    </tr>
    <tr>
      <td>Kata Kunci</td>
      <td>: <?php echo $keyword ?></td>
    </tr>
    <tr>
      <td>Jenis Koleksi</td>
      <td>: 
        <?php 
        if($jenis == 1){
          echo "S1-Artikel";
        }else if ($jenis == 2){
          echo "S1-Skripsi";
        }else {
          echo "S1-Dokumen Engineering";
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>Staff Input</td>
      <td>: <?php echo $staf_input ?></td>
    </tr>
    <tr>
      <td>Tanggal input</td>
      <td>: <?php echo $tgl_input ?></td>
    </tr>
</tbody>
</table>

<div class="row">
  <a href="dashboard/post/<?php echo $path ?>" style="text-decoration: n;"><div class="col-sm-6"><button type="button" class="btn btn-primary" style="width: 100%; font-size:1.1rem; margin-bottom: 2vh;">Download File</button></a></div>
  <div class="col-sm-6"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="width: 100%; font-size:1.1rem;">
  Lihat Absrak
</button></div>
</div>

<!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Abstrak</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php echo $abstrak ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 <!-- Start Footer  -->
 <div class="container-fluid" style="background-color: #003cb3; color: white;margin-top:12vh">
    <div class="container" style="padding-top: 2em;">
        <div class="row">
            <div class="col-lg-3" style="padding-right: 2vw;">
                <h2 style="font-weight:600">Tentang</h2>
                <h5 style="font-size:1rem; text-align:justify">Repositori Tugas Akhir dan Dokumen Engineering Teknik Elektro Universitas Singaperbangsa Karawang</h5>
            </div>
            <div class="col-lg-4" style="padding-left: 0vw; padding-right: 5vw;">
                <h2 style="text-align: left;font-weight:600">Informasi Kontak</h2>
                <div class="row" style="text-align: justify;font-weight:500; color:white; font-size: 1rem">

                    <p>Jl. HS. Ronggo Waluyo,
                        Puseurjaya, Kec. Telukjambe
                        Timur., Kab. Karawang,
                        Jawa Barat 41361</p>
                    <p>
                        Email: repository@ft.unsika.ac.id
                    </p>
                    <p>Phone: 085718106778</p>
                </div>
            </div>
            <div class="col-lg-2" style="text-align: left;">
                <h2 style="font-weight:600">Akses</h2>
                <a href="index.php" style="text-decoration:none; font-weight:500; color:white; font-size: large">Home</a><br>
                <a href="dashboard/login.php" style="text-decoration:none; font-weight:500; color:white; font-size: large">Login</a><br>

            </div>
            <div class="col-lg-3">
                <h2 style="text-align: left;font-weight:600">Media Sosial</h2>
                <div align="left" style="font-size: 1.7rem;">
                <a href="https://facebook.com" style=" color:white"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com" style=" color:white"><i class="fab fa-twitter-square"></i></a>
                <a href="https://instagram.com" style=" color:white"><i class="fab fa-instagram-square"></i></a>
                <a href="https://youtube.com" style=" color:white"><i class="fab fa-youtube-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End Footer  -->
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>