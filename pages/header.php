<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="_assets/css/custom.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->

        <!-- BOOSTRAP -->
    <script src="_vendor/jquery/dist/jquery.min.js"></script>
    <script src="_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="_assets/js/custom.js"></script>
        <!-- OFFLINE -->
    <link rel="stylesheet" href="_assets/DataTables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="_assets/DataTables/datatables.min.css"/>
    <script type="text/javascript" src="_assets/DataTables/datatables.min.js"></script>


 <!-- DATA TABEL Online -->
    <!-- <script src= "https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src= "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src= "https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
   
 

    <title>Sistem Informasi</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed fixed-top navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Sistem Informasi Mahasiswa </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
        <?php 
        if (isset($_SESSION['login'])) {
         ?> 
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">User</a>
                    <div class="dropdown-menu " x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="index.php?page=tambah_user">Tambah User</a>
                        <a class="dropdown-item" href="index.php?page=daftar_user">Daftar User</a>

                    </div>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Dosen</a>
                    <div class="dropdown-menu " x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="index.php?page=tambah_dosen">Tambah Dosen</a>
                        <a class="dropdown-item" href="index.php?page=daftar_dosen">Daftar Dosen</a>

                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Program Studi</a>
                    <div class="dropdown-menu " x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="index.php?page=tambah_prodi">Tambah Prodi</a>
                        <a class="dropdown-item" href="index.php?page=daftar_progdi">Daftar Prodi</a>

                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Mahasiswa</a>
                    <div class="dropdown-menu " x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="index.php?page=tambah_mhs">Tambah Mahasiswa</a>
                        <a class="dropdown-item" href="index.php?page=daftar_mhs">Daftar Mahasiswa</a>

                    </div>
                </li>
                
           <?php 
            }
             ?>

            </ul>
            <ul class="navbar-nav ml-auto">
            <?php 
            if(isset($_SESSION['login'])){
             ?>
                    <li class="nav-link">
                        <a class="nav-link" href="index.php?page=logout">logout</a>
                    
                    <?php
                    }else{
                    ?>
                        <li class="nav-link">
                            <a class="nav-link" href="index.php?page=login">login</a>
                        </li>
            
            <?php
            }
            ?>
           
        </div>
    </nav>