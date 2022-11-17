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
$query = mysqli_query($conn, "SELECT * FROM `post` ORDER BY `status` AND `id`");
?>



<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Antrian Dokumen</h1>
                    <p class="mb-4">Antrian Dokumen Teknik Elektro Unsika</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" align="left">
                        <!-- <a href="tambah_artikel.php?id=<?php echo $id ?>">    
                        <h6 class="m-0 font-weight-bold text-primary"><button  type="button" class="btn btn-primary" style="width:20vw"><i class="fas fa-plus-square"></i> Tambah Data</button>
                            </h6>
                            </a> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Nomor</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Upload</th>
                                            <th>Kontributor/Dosen Pembimbing</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                            <th>Dokumen</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Upload</th>
                                            <th>Kontributor/Dosen Pembimbing</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                            <th>Dokumen</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
    $nomor = 1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
      <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['penulis']; ?></td>
        <td><?php echo $data['tgl_input']; ?></td>
        <?php
            if ($role == 1) {
                $pembimbing = $data['kontributor'];
                switch($pembimbing){
                    case 1:
                        echo "<td>Arnisa Stefanie, ST, MT.</td>";
                        break;
                    case 2:
                        echo "<td>Dian Budhi Santoso, S.T., M.Eng.</td>";
                        break;
                    case 3:
                        echo "<td>Dr. Ir. Yuliarman Saragih, MT.</td>";
                        break;
                    case 4:
                        echo "<td>Ibrahim, ST, MT.</td>";
                        break;
                    case 5:
                        echo "<td>Insani Abdi Bangsa, ST., M.Sc</td>";
                        break;
                    case 6:
                        echo "<td>Ir. Lela Nurpulaela, MT.</td>";
                        break;
                    case 7:
                        echo "<td>Rahmat Hidayat, A.Md.T, S.Pd., M.Pd</td>";
                        break;
                    case 8:
                        echo "<td>Reni Rahmadewi, ST, MT.</td>";
                        break;
                    case 9: 
                        echo "<td>Ulinnuha Latifa, S.T., M.T.</td>";
                        break;
                    default:
                        echo "<td>Ulinnuha Latifa, S.T., M.T.</td>";
                        break;
        
                }
            }
            
            
            
            ?></td>
        <td><?php 
            if ($data['status']==0) {
                echo "<button type='button' class='btn btn-warning'>Menunggu</button>";
            }else if ($data['status']==1) {
                echo "<button type='button' class='btn btn-success'>Diterima</button>";
            }else if ($data['status']==2) {
                echo "<button type='button' class='btn btn-danger' >Ditolak</button>";
            }
            
            ?></td>
        <td>
            <?php 
            $id_post = $data['id'];
            if ($data['status']==0) {
                echo "<a href='aksi_dokumen.php?id=$id&role=$role&id_prop=$id_post&pesan=1'><button type='button' class='btn btn-success'>Setujui</button></a>";
                echo "<a href='aksi_dokumen.php?id=$id&role=$role&id_prop=$id_post&pesan=2'><button type='button' class='btn btn-danger'>Tolak</button></a>";
            }else if ($data['status']==1) {
                echo "<a href='aksi_dokumen.php?id=$id&role=$role&id_prop=$id_post&pesan=3'><button type='button' class='btn btn-success'>Batalkan Penerimaan</button></a>";
            }else if ($data['status']==2) {
                echo "<a href='aksi_dokumen.php?id=$id&role=$role&id_prop=$id_post&pesan=4'><button type='button' class='btn btn-danger' >Hapus List</button></a>";
            }
            
            ?>
            </td>        <td>
          <a href="post/<?php echo $data['path']; ?>"><button type="button" class="btn btn-success">Lihat</button></a>
          <a href="hapus_post.php?id=1&id_post=<?php echo $data['id']."&jenis=". $data['jenis']; ?>" onclick="return confirm ('Apakah anda benar ingin menghapus <?php echo $data['judul']; ?> dari daftar Artikel?')"><button type="button" class="btn btn-danger">Hapus</button></a>
        </td>
      </tr>
    <?php } ?>
                                        
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