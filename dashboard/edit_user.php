<?php
include "template/sidebar.php";
include 'template/header.php';
include '../koneksi.php';
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Ubah Data</h1>
                    <form action="user_edit_fcn.php" method="GET">
                        <div class="row">
                            <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
                            <div> <input style="opacity:0" name="role" value="<?php echo $_GET['role'] ?>"></div>
                            <div> <input style="opacity:0" name="ida" value="<?php echo $_GET['ida'] ?>"></div>
                            <div> <input style="opacity:0" name="rolea" value="<?php echo $_GET['rolea'] ?>"></div>
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
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['address']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan" class="col-sm-3 col-form-label">NID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nid" name="nid" value="<?php echo $data['NID']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="roleb" class="col-sm-3
                                    col-form-label">Role</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" id="Admin" name="roleb" value="1">
                                            <label for="admin">Admin</label><br>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <label class="col-sm-3
                                    col-form-label mt-3"></label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" id="Dosen" name="roleb" value="2">
                                            <label for="roleb">Dosen</label><br>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <label class="col-sm-3
                                    col-form-label mt-3"></label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" id="Mahasiswa" name="roleb" value="3">
                                            <label for="roleb">Mahasiswa</label><br>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-3
                                    col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" id="lelaki" name="gender" value="1">
                                            <label for="lelaki">Laki-laki</label><br>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <label class="col-sm-3
                                    col-form-label mt-3"></label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" id="Perempuan" name="gender" value="2">
                                            <label for="Perempuan">Perempuan</label><br>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </div>
                            </div>

                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



            <?php
            include 'template/footer.php'
            ?>