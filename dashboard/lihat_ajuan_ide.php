<?php
include "template/sidebar.php";
include 'template/header.php';

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "repository";

$id = $_GET['id'];
$role = $_GET['role'];
$idr = $_GET['idr'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
// Check connection

$id = $_GET['id'];


$query_mysql_data = mysqli_query($conn, "SELECT * FROM `proposal` WHERE `id_input` LIKE '$idr'") or die(mysqli_error($host));

$data_ajuan = mysqli_fetch_array($query_mysql_data);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$query = mysqli_query($conn, "SELECT * FROM `proposal` WHERE `id_input` = $idr ");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Ajuan Ide Riset</h1>
    
        <div class="row">
            <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
            <div> <input style="opacity:0" name="role" value="<?php echo $_GET['role'] ?>"></div>
            <div class="col-lg-8" style="margin-top: -2vw;">
                
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Judul</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data_ajuan['judul'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3
                     col-form-label">Penulis</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $data_ajuan['penulis'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Dosen Pembimbing</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="dosbim" name="dosbim" value="<?php echo $data_ajuan['pembimbing'] ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Abstraksi Riset</label>
                    <div class="col-sm-9">
                        <textarea type="text" class="form-control" id="abstrak" name="abstrak" style="height:40vh" placeholder="<?php echo $data_ajuan['abstrak'] ?>" readonly></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3
                     col-form-label">Kata Kunci</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="keyword" name="keyword" value="<?php echo $data_ajuan['keyword'] ?>" readonly>
                    </div>
                </div>
            </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php
include 'template/footer.php'
?>