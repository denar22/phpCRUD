
<!-- <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //variabel dari elemen form

    $user_id     = $_POST['user_id'];
    $nama        = $_POST['nama'];
    $password    = $_POST['password'];
    $level       = $_POST['level'];

    if($user_id==''|| $nama==''|| $password==''|| $level==''){
        echo "Form belum lengkap!!!";
    }else{
    $sqlUpdate=mysqli_query($con,"UPDATE tb_user SET user_id = '$user_id',
                                                    nama = '$nama',
                                                    password = '$password',
                                                    level='$level'
                                                WHERE user_id = '$user_id'");

            if(!$sqlUpdate){
                echo "Update Gagal!!!";
            }else{
                echo "Update Berhasil";
            }
        }   
    }
?>
 -->

<?php 
    include 'config.php';

    $user_id     = $_POST['user_id'];
    $nama        = $_POST['nama'];
    $password    = $_POST['password'];
    $level       = $_POST['level'];

$sqlUpdate=mysqli_query($con,"UPDATE tb_user SET user_id  ='$user_id',
                                            nama    ='$nama',
                                            password='$password',
                                            level   ='$level'
                                    WHERE   user_id ='$user_id'");
    if($sqlUpdate){
        echo "<script> alert('Berhasil Ubah Data'); document.location='index.php?page=daftar_user'; </script>";
    }else{
        echo "<div class'alert-alert'> Gagal melakukan edit data </div>";
    }
    // header('Location: index.php?page=daftar_user');

?>  
