<?php
include "koneksi.php";
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
    <link rel="icon" href="dashboard/img/logo_unsika.png" type="image/x-icon">
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
  <a class="navbar-brand" href="index.php" style="margin-left: 3vw;"><img src="dashboard/img/header unsika.png" alt="" width="500vw"></a>
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
  </div>

  <div class="container-fluid" style="margin-top: 5vh; margin-bottom:5vh">
    <div class="row">
       <div class="col-sm-8" style="margin-left:5vw">
       <h2>Kata Kunci: <?php
        if (isset($_GET['query']) && (isset($_GET['jenis']))) {
            $qry = $_GET['query'];
            $jenis= $_GET['jenis'];
            echo $qry . ", ";
            if($jenis == 1){
                echo "Artikel";
            }else if ($jenis == 2){
                echo "Skripsi";
            }else {
                echo "Dokumen Engineering";
            } 
        }else if (isset($_GET['query'])) {
            $qry = $_GET['query'];
            echo $qry;
        } else{
            $jenis= $_GET['jenis'];
            if($jenis == 1){
                echo "Artikel";
            }else if ($jenis == 2){
                echo "Skripsi";
            }else {
                echo "Dokumen Engineering";
            }
        }

        ?>  </h2>
       </div> 
       <div class="col-sm-3">
       <form class="d-flex" role="search" method="get" action="search.php">
        <?php
        if (isset($_GET['jenis'])) {
            $jns = $_GET['jenis'];
            echo "<input type='text' name='jenis' style='opacity:0; width:0vw' value=". $jns . ">";
        }
        ?>        
      <input class="form-control me-2" name="query" type="search" placeholder="Tuliskan kata kunci" aria-label="Search" style="height: 3rem;">
      <button class="btn btn-outline-primary" type="submit" style="width: 10vw;"><i class="fas fa-search"></i><h5 style="display: inline;">   Cari</h5></button>
    </form>
       </div> 
    </div>
  </div>

  
    <?php
$batas = 2;
$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

$previous = $halaman - 1;
$next = $halaman + 1;
if (isset($_GET['query']) && isset($_GET['jenis'])) {
    $query = $_GET['query'];
    $jenis = $_GET['jenis'];
    $data2 = mysqli_query($host,  "SELECT * FROM `post` WHERE `status`= 1 AND `jenis`='$jenis' AND (`judul` LIKE '%$query%' OR `penulis` LIKE '%$query%' OR `keyword` LIKE '%$query%')") or die(mysqli_error($host));
    $jumlah_data = mysqli_num_rows($data2);
    $total_halaman = ceil($jumlah_data / $batas);
    $query_mysql = mysqli_query($host,  "SELECT * FROM `post` WHERE `status`= 1 AND (`judul` LIKE '%$query%' OR `penulis` LIKE '%$query%' OR `keyword` LIKE '%$query%') AND `jenis`='$jenis' LIMIT $halaman_awal, $batas") or die(mysqli_error($host));
    $nomor =$halaman_awal+1;
} else if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $data2 = mysqli_query($host,  "SELECT * FROM `post` WHERE `status`= 1 AND (`judul` LIKE '%$query%' OR `penulis` LIKE '%$query%' OR `keyword` LIKE '%$query%')") or die(mysqli_error($host));
    $jumlah_data = mysqli_num_rows($data2);
    $total_halaman = ceil($jumlah_data / $batas);
    $query_mysql = mysqli_query($host,  "SELECT * FROM `post` WHERE `status`= 1 AND (`judul` LIKE '%$query%' OR `penulis` LIKE '%$query%' OR `keyword` LIKE '%$query%') LIMIT $halaman_awal, $batas") or die(mysqli_error($host));
    $nomor =$halaman_awal+1;
} else if (isset($_GET['jenis'])) {
    $jenis = $_GET['jenis'];
    $data2 = mysqli_query($host, "SELECT * FROM `post` WHERE `jenis`='$jenis' AND `status`= 1") or die(mysqli_error($host));
    $jumlah_data = mysqli_num_rows($data2);
    $total_halaman = ceil($jumlah_data / $batas);
    $query_mysql = mysqli_query($host, "SELECT * FROM `post` WHERE `jenis`='$jenis' AND `status`= 1 LIMIT $halaman_awal, $batas") or die(mysqli_error($host));
    $nomor =$halaman_awal+1;
}else {
    $data2 = mysqli_query($host, "SELECT * FROM `post`") or die(mysqli_error($host));
    $jumlah_data = mysqli_num_rows($data2);
    $total_halaman = ceil($jumlah_data / $batas);
    $query_mysql = mysqli_query($host, "SELECT * FROM `post`  WHERE `status`= 1 LIMIT $halaman_awal, $batas") or die(mysqli_error($host));
    $nomor =$halaman_awal+1;
}
   
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
      
      <div class="card" style="width: 90vw; margin-left:5vw; margin-bottom: 3vh; box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);">
  <div class="card-body">
    <a href="post_detail.php?id=<?php echo $data['id'] ?>" style="text-decoration: none; color: #1a8cff">
    <h3 class="card-title"><?php echo $data['judul']; ?></h3>
    <div>
    <i class="fas fa-user" style="opacity: 0.5;"></i><h6 class="card-subtitle mb-2 text-muted" style="display: inline;"> <?php echo $data['penulis']; ?></h6>
    </div>
    </a>
  </div>
</div>  
      
       <?php } ?>

       <ul class="pagination justify-content-center">
				<?php if($halaman > 1) {
                echo "<li class='page-item'>";
                echo "<a  class='page-link'href='?";

                if(isset($_GET['query']) && isset($_GET['jenis'])){
                    echo "query=" . $query."&jenis=" . $jenis;
                }else if (isset($_GET['query'])){
                    echo "query=" .  $query;
                }else if (isset($_GET['jenis'])) {
                    echo "jenis=" .  $jenis;
                }
                
                echo "&halaman=$previous'>Previous</a>";
                echo "</li>";
                }
                ?>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					echo "<li class='page-item'>";
                    echo "<a  class='page-link'href='?";
                    if(isset($_GET['query']) && isset($_GET['jenis'])){
                        echo "query=" . $query."&jenis=" . $jenis;
                    }else if (isset($_GET['query'])){
                        echo "query=" .  $query;
                    }else if (isset($_GET['jenis'])) {
                        echo "jenis=" .  $jenis;
                    }        
                    echo "&halaman=$x'>$x</a>";
                    echo "</li>";
                ?>
					<?php
				}
				?>				
				<?php if($halaman < $total_halaman) {
                echo "<li class='page-item'>";
                echo "<a  class='page-link'href='?";
                    if(isset($_GET['query']) && isset($_GET['jenis'])){
                        echo "query=" . $query."&jenis=" . $jenis;
                    }else if (isset($_GET['query'])){
                        echo "query=" .  $query;
                    }else if (isset($_GET['jenis'])) {
                        echo "jenis=" .  $jenis;
                    }        
                                       
                echo "&halaman=$next'>Next</a>";
                echo "</li>";
                }
                ?>
                
			</ul>
            <div class="card-footer text-muted" style="background-color:  #003cb3;">
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