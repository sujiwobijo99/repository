<?php 
include "template/sidebar.php";
include "template/header.php";

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "repository";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$query = mysqli_query($conn, "SELECT * FROM `post` WHERE `jenis` = 2  ORDER BY `id`");
?>

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Plagiarism Checker</h1>
                    <p class="mb-4">Pengecekan plagiasi pada abstraksi ide riset dengan data terdahulu</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" align="left">
                            <!-- <h6 class="m-0 font-weight-bold text-primary"><button  type="button" class="btn btn-primary" style="width:20vw"><i class="fas fa-plus-square"></i> Tambah Data</button>
</h6> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                            <th>Kaliamat Plagiat</th>
                                            <th>Persentase Plagiasi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kaliamat Plagiat</th>
                                            <th>Persentase Plagiasi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    
      <tr>
        <td>
        <?php

// Upload to databses
$id = $_GET['id'];
$id_prop = $_GET['id_prop'];
$role = $_GET['role'];


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

$sql_satu = "SELECT `abstrak` FROM `proposal` WHERE `id` = $id_prop";
$sql_dua = "SELECT `abstrak` FROM `proposal` WHERE `abstrak` NOT IN (SELECT `abstrak` FROM `proposal` WHERE `id` = $id_prop)";


$query_mysql_satu = mysqli_query($conn, $sql_satu) or die(mysqli_error($conn));
$query_mysql_dua = mysqli_query($conn, $sql_dua) or die(mysqli_error($con));

$data1 = mysqli_fetch_array($query_mysql_satu);
$text_full = [];
while ($data = mysqli_fetch_array($query_mysql_dua)) {
    $text_full = array_merge($text_full,$data);
}


$text_satu = $data1['abstrak'];



$exp_satu = explode(".",$text_satu);
// $exp_dua = explode(".", $text_dua);
$total_percentage = 0;
$total_text = 0;

foreach($exp_satu as $text1) {
    foreach($text_full as $text_full_idx) {
        $exp_dua = explode(".", $text_full_idx);
        foreach ($exp_dua as $text2) {
        $sim = similar_text(strtoupper($text1), strtoupper($text2), $simpercentage);
        if($simpercentage>50)
            {
                echo "<button type='button' class='btn btn-danger'>" .round($simpercentage)."%.</button>";
                echo "<button type='button' class='btn btn-warning'>" . $text1 . "</button>" . "<button type='button' class='btn btn-success'>Simmilar to </button>". "<button type='button' class='btn btn-warning'>" . $text2 . "</button><br>";
            }
            $total_percentage = $total_percentage + round($simpercentage);
            $total_text = $total_text + 1;
        }   
    }
}

$total_plag = $total_percentage / (count($exp_satu)*10);


?>


        </td>
        <td><?php echo $total_plag ?> %</td>
        
        
      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Aplikasi Pemrograman Komputer UNSIKA 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

       

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>