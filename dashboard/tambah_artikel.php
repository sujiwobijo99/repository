<?php
include "template/sidebar.php";
include 'template/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Artikel</h1>
    <form action="tambah_artikel_fcn.php" method="POST"  enctype="multipart/form-data">
        <div class="row">
            <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
            <div> <input style="opacity:0" name="role" value=""></div>
            <div class="col-lg-8" style="margin-top: -2vw;">
                
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Judul</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3
                     col-form-label">Penulis</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Kontributor/Dosen Pembimbing</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kontributor" name="kontributor">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3
                     col-form-label">Subjek</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="subjek" name="subjek">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Penerbit</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3
                     col-form-label">Kata Kunci</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="keyword" name="keyword">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Staf Input</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="staf_input" name="staf_input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Upload File</label>
                    <div class="col-sm-9">
                    <input type="file" name="file" size="50" />
                    </div>
                </div>
                
                
                
                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-3
                                    col-form-label">Jenis Dokumen</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <input type="radio" id="artikel" name="jenis" value="1">
                                            <label for="artikel">Artikel</label><br>
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
                                            <input type="radio" id="skripsi" name="jenis" value="2">
                                            <label for="skripsi">Skripsi</label><br>
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
                                            <input type="radio" id="dokeng" name="jenis" value="3">
                                            <label for="dokeng">Dokumen Engineering</label><br>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary" style="width: 10rem;">Tambah</button>
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