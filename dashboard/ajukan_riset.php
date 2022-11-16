<?php
include "template/sidebar.php";
include 'template/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Ide Riset</h1>
    <form action="ajukan_riset_fcn.php" method="POST"  enctype="multipart/form-data">
        <div class="row">
            <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
            <div> <input style="opacity:0" name="role" value="<?php echo $_GET['role'] ?>"></div>
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
                     col-form-label">Dosen Pembimbing</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="cars" id="cars">
                        <option value="1">Arnisa Stefanie, ST, MT.</option>
                        <option value="2">Dian Budhi Santoso, S.T., M.Eng.</option>
                        <option value="3">Dr. Ir. Yuliarman Saragih, MT.</option>
                        <option value="4">Ibrahim, ST, MT.</option>
                        <option value="5">Insani Abdi Bangsa, ST., M.Sc</option>
                        <option value="6">Ir. Lela Nurpulaela, MT.</option>
                        <option value="7">Rahmat Hidayat, A.Md.T, S.Pd., M.Pd</option>
                        <option value="8">Reni Rahmadewi, ST, MT.</option>
                        <option value="9">Ulinnuha Latifa, S.T., M.T.</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3
                     col-form-label">Abstraksi Riset</label>
                    <div class="col-sm-9">
                        <textarea type="text" class="form-control" id="abstrak" name="abstrak" style="height:40vh"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3
                     col-form-label">Kata Kunci</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="keyword" name="keyword">
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