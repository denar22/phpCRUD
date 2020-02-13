<?php

include './config.php';


    //variabel dari elemen form


    $dosen_id  = $_POST['dosen_id'];
    $nama_dosen  = $_POST['nama_dosen'];
    $pendidikan_terakhir    = $_POST['pendidikan_terakhir'];
    $alamat      = $_POST['alamat'];
    $email       = $_POST['email'];
    $nomer_hp    = $_POST['nomer_hp'];
    $dosen_pa    = $_POST['dosen_pa'];

mysqli_query($con, "UPDATE tb_dosen SET nama_dosen='$nama_dosen',pendidikan_terakhir='$pendidikan_terakhir',alamat='$alamat',email='$email', nomer_hp='$nomer_hp',dosen_pa='$dosen_pa' WHERE dosen_id='$dosen_id'");

      
            header('location:index.php?page=daftar_dosen');

        
?>
