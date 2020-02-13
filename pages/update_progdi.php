
<?php 
if(isset($_POST['confrim'])){
    $studi_id         = $_POST['program_studi_id'];
    $nama             = $_POST['nama_progdi'];
    $jenjang          = $_POST['jenjang'];
    $nama_kaprogdi    = $_POST['nama_kaprogdi'];

     mysqli_query($con,"UPDATE tb_user SET program_studi_id     ='$studi_id',
                                            nama_progdi         ='$nama',
                                            jenjang_progdi      ='$jenjang',
                                            nama_kepala_progdi  ='$nama_kaprogdi'
                                    WHERE   program_studi_id    ='$program_studi_id'");

        // echo "<script> window.location='index.php?page=daftar_user' </script>";
     header('location:index.php?page=daftar_dosen');
    }
?>  