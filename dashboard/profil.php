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
            <div class="col-lg-10">
            <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
            <div> <input style="opacity:0" name="role" value=""></div>
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
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['address']; ?>" readonly>
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
             
                                                                                                               
        </div>
        <div class="col-lg-2" style="margin-left:-10rem">
            <img src="img/<?php echo $foto ?>" alt="" height="250rem">
            </div>
        

    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php
include 'template/footer.php'
?>