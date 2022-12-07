<?php
include "template/sidebar.php";
include 'template/header.php';
include '../koneksi.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data User</h1>
    <form action="tambah_user_fcn.php" method="GET">
        <div class="row">
            <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
            <div> <input style="opacity:0" name="role" value="<?php echo $_GET['role'] ?>"></div>
            <div class="col-lg-8" style="margin-top: -2vw;">
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email Pengguna">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password Pengguna">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap Pengguna">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Pengguna">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nid" class="col-sm-3 col-form-label">NID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nid" name="nid" placeholder="Masukkan NID Pengguna">
                    </div>
                </div>

                <div class="form-group row">
                                    <label for="rolea" class="col-sm-3
                                    col-form-label">Role</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" id="Admin" name="rolea" value="1">
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
                                            <input type="radio" id="Dosen" name="rolea" value="2">
                                            <label for="rolea">Dosen</label><br>
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
                                            <input type="radio" id="Mahasiswa" name="rolea" value="3">
                                            <label for="rolea">Mahasiswa</label><br>
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
                        <button type="submit" class="btn btn-primary">Tambah</button>
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