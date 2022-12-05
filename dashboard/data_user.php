<?php
include "template/sidebar.php";
include 'template/header.php';
include '../koneksi.php';

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data User</h1>
    <p class="mb-4">Data lengkap user untuk keperluan administrasi oleh Admin</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
            <a href="tambah_user.php?<?php echo "id=$id&role=$role" ?>">
                <button class="m-0 btn btn-primary text-light"><strong>+ Tambah User</strong></button>
            </a>
            </div>
            <div class="col-lg-4">
            <form class="form-inline" method="GET" action="data-user.php">
               
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
                <div> <input style="opacity:0" name="role" value="<?php echo $_GET['role'] ?>"></div> 
            </form>
            </div>
            </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>NID</th>
                            <th>Jenis Kelamin</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $batas = 5;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
        
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        if (isset($_GET['search'])) {
                            $search = $_GET['search'];
                            $data2 = mysqli_query($host, "SELECT * FROM `user` WHERE `nama` LIKE '%$search%'") or die(mysqli_error($host));
                            $jumlah_data = mysqli_num_rows($data2);
                            $total_halaman = ceil($jumlah_data / $batas);
                            $query_mysql = mysqli_query($host, "SELECT * FROM `user` WHERE `nama` LIKE '%$search%' LIMIT $halaman_awal, $batas") or die(mysqli_error($host));
                            $nomor =$halaman_awal+1;
                        } else {
                            $data2 = mysqli_query($host, "SELECT * FROM `user`") or die(mysqli_error($host));
                            $jumlah_data = mysqli_num_rows($data2);
                            $total_halaman = ceil($jumlah_data / $batas);
                            $query_mysql = mysqli_query($host, "SELECT * FROM `user` LIMIT $halaman_awal, $batas") or die(mysqli_error($host));
                            $nomor =$halaman_awal+1;
                        }
                        
                        
                        while ($data = mysqli_fetch_array($query_mysql)) {
                        ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['address']; ?></td>
                                <td><?php echo $data['NID']; ?></td>
                                <td><?php
                                    if ($data['gender'] == 1) {
                                        echo "Laki-Laki";
                                    } else {
                                        echo "Perempuan";
                                    }
                                    ?></td>
                                <td><?php if ($data['role'] == 1) {
                                        echo "Admin";
                                    } else if ($data['role'] == 2) {
                                        echo "Guru";
                                    } else {
                                        echo "Mahasiswa";
                                    }
                                    ?></td>
                                <td>
                                    <a class="edit" style="color: white;text-decoration:none" href="edit_user.php?id=<?php echo $data['id'] . "&role=" . $data['role'] . "&ida=" . $_GET['id'] . "&rolea=" . $_GET['role']; ?>"><button class="btn btn-success"><strong>Edit</strong></button></a>
                                    <a class="edit" style="color: white;text-decoration:none" href="hapus.php?id=<?php echo $data['id'] . "&role=" . $data['role'] . "&ida=" . $_GET['id'] . "&rolea=" . $_GET['role'];; ?>"><button class="btn btn-danger"><strong>Hapus</strong></button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <ul class="pagination justify-content-center">
				<?php if($halaman > 1) {
                echo "<li class='page-item'>";
                echo "<a  class='page-link'href='?id=$id&role=$role&halaman=$previous'>Previous</a>";
                echo "</li>";
                }
                ?>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?id=<?php echo $id. "&role=" . $role . "&halaman=" . $x?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<?php if($halaman < $total_halaman) {
                echo "<li class='page-item'>";
                echo "<a  class='page-link'href='?id=$id&role=$role&halaman=$next'>Next</a>";
                echo "</li>";
                }
                ?>
                
			</ul>
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