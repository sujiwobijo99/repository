<?php
include "template/sidebar.php";
include "template/header.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ganti Password</h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password Lama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $data['password']; ?>" readonly>
                </div>
            </div>
            <form action="pwfcn.php" method="GET">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Password Baru</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password_new" name="password_new" placeholder="Masukan pasword baru anda">
                    </div>
                </div>
                <div> <input style="opacity:0" name="id" value="<?php echo $_GET['id'] ?>"></div>
                <div> <input style="opacity:0" name="role" value="<?php echo $_GET['role'] ?>"></div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary" style="margin-top: -8vw;">Kirim</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php
include 'template/footer.php'
?>