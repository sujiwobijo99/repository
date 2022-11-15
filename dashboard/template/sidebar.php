<?php
include '../query.php';
  $role = $_GET['role'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Repository TE Unsika - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" href="../dashboard/img/logo_unsika.png"  type="image/x-icon">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-university"></i> -->
                    <img src="img/logo_unsika.png" width="50rem" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Repository TE UNSIKA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php 
                if ($role==1) {
                    echo "
                    <!-- Nav Item - Dashboard -->
                        <li class='nav-item active'>
                            <a class='nav-link' href='index.php?id=$id&role=$role'>
                                <i class='fas fa-fw fa-tachometer-alt'></i>
                                <span>Dashboard</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class='sidebar-divider'>

                        <!-- Heading -->
                        <div class='sidebar-heading'>
                            User Management
                        </div>
                    ";
                }
            ?>

            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user"></i>
                    <span>Profil</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profile Management</h6>
                        <a class="collapse-item" href="profil.php?id=<?php echo $id . "&role=". $role  ?>">Lihat Profil</a>
                        <a class="collapse-item" href="edit_profil.php?id=<?php echo $id . "&role=". $role ?>">Ubah Profil</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="ubah_pw.php?id=<?php echo $id . "&role=". $role  ?>">
                <i class="fas fa-key"></i>
                <span>Ganti Password</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class='sidebar-heading'>
                Sistem Manajemen TA
                </div> 

            <?php
            if($role==1 or $role==2) {
                   
            echo " <!-- Nav Item - Artikel -->
                    <li class='nav-item'>
                        <a class='nav-link' href='artikel.php?id=$id&role=$role'>
                        <i class='fas fa-lightbulb'></i>
                        <span>Lihat Antrian Proposal</span></a>
        
                    <!-- Nav Item - Artikel -->
                    <li class='nav-item'>
                        <a class='nav-link' href='artikel.php?id=$id&role=$role'>
                        <i class='fas fa-file-pdf'></i>
                        <span>Lihat Antrian Dokumen</span></a>
                    </li>
                    
                    <!-- Nav Item - Artikel -->
            <li class='nav-item'>
                <a class='nav-link' href='artikel.php?id=$id&role=$role'>
                <i class='fas fa-newspaper'></i>
                <span>Artikel</span></a>
            </li>
            <!-- Nav Item - Charts -->
            <li class='nav-item'>
                <a class='nav-link' href='skripsi.php?id= $id&role=$role'>
                <i class='fas fa-graduation-cap'></i>
                    <span>Skripsi</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class='nav-item'>
                <a class='nav-link' href='dokeng.php?id= $id&role=$role'>
                <i class='fas fa-book'></i>
                    <span>Dokumen Engineering</span></a>
            </li>
                    "
                    
                    ;
                }
            
                if ($role==1) {
                    echo "
                    <!-- Nav Item - Tables -->
                    <li class='nav-item'>
                        <a class='nav-link' href='tambah_post.php?id=<?php echo $id . '&role='. $role  ?>'>
                        <i class='fas fa-plus'></i>
                            <span>Tambah Dokumen</span></a>
                    </li>
            ";
                }

                if ($role==3) {
                    echo "
                    <!-- Nav Item - Tables -->
                    <li class='nav-item'>
                        <a class='nav-link' href='status_ajuan.php?id=$id&role=$role'>
                        <i class='fas fa-tasks'></i>
                        <span>Status Ajuan</span></a>
                    <!-- Nav Item - Tables -->
                    <li class='nav-item'>
                        <a class='nav-link' href='ajukan_riset.php?id=$id&role=$role'>
                        <i class='fas fa-plus'></i>
                            <span>Ajukan Ide Riset</span></a>
                    </li>
                    <!-- Nav Item - Tables -->
                    <li class='nav-item'>
                        <a class='nav-link' href='ajukan_dokumen.php?id=$id&role=$role'>
                        <i class='fas fa-plus'></i>
                            <span>Ajukan Dokumen</span></a>
                    </li>
                    ";
                }
            ?>



            
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


        </ul>
        <!-- End of Sidebar -->