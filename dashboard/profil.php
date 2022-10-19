<?php
include "template/sidebar.php";
include 'template/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profil Pengguna</h1>
    <img src="gambar.php?<?php echo "id=$id"; ?>" alt="">
    <form action=" editfcn.php" method="GET">
        <div class="row">
            <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
            <div> <input style="opacity:0" name="role" value="<?php echo $_GET['role'] ?>"></div>
            <div class="col-lg-8" style="margin-top: -2vw;">
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="status" name="status" value="<?php 
                        if ($data['role'] == 1) {
                            echo "Admin";
                        } else if ($data['role'] == 2) {
                            echo "Guru";
                        }else {
                            echo 'Santri';
                        }
                        ; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="program" class="col-sm-3 col-form-label">Program</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="program" name="program" value="<?php 
                        if ($data['program'] == 1) {
                            echo "MDTA";
                        } else if ($data['program'] == 2) {
                            echo "TPQ";
                        }else if($data['program'] == 3){
                            echo 'TBBA';
                        }else if($data['program'] == 4){
                            echo 'Admin';
                        }else if($data['program'] == 5){
                            echo 'Guru';
                        }
                        ; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php
                                                                                                                if ($data['gender'] == 1) {
                                                                                                                    echo "Laki-Laki";
                                                                                                                } else {
                                                                                                                    echo "Perempuan";
                                                                                                                };
                                                                                                                ?>" readonly>
                    </div>
                </div>
                                                                                                            </div>
            <div class="col-lg-4" style="margin-top: -2vw;">
            <img src="<?php echo 'foto/'.$data['url_foto'] ?>" alt="" width="300vw">
                                                                                                            </div>

    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php
include 'template/footer.php'
?>