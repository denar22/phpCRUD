 <?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    //variabel dari elemen form

    $nama        = $_POST['nama'];
    $pendidikan  = $_POST['pendidikan_terakhir'];
    $alamat      = $_POST['alamat'];
    $email       = $_POST['email'];
    $noTelp      = $_POST['noTelp'];
    $dosenPA     = $_POST['dosenPA'];

    if($nama==''|| $pendidikan==''|| $alamat==''|| $email==''|| $noTelp==''|| $dosenPA==''){
        echo "Form belum lengkap!!!";
    }else{
        //proses simpan data 
        $simpan = mysqli_query($con, "INSERT INTO tb_dosen (nama_dosen, pendidikan_terakhir, alamat, email, nomer_hp, dosen_pa) VALUES ('$nama', '$pendidikan', '$alamat', '$email', '$noTelp', '$dosenPA')");

        if(!$simpan){
            echo "Simpan data gagal!!";
        }else{
            echo "Data Tersimpan";
        }
    }
}
?>


<!-- <?php 

    $nama        = $_POST['nama'];
    $pendidikan  = $_POST['pendidikan_terakhir'];
    $alamat      = $_POST['alamat'];
    $email       = $_POST['email'];
    $noTelp      = $_POST['noTelp'];
    $dosenPA     = $_POST['dosenPA'];

    mysqli_query($con, "INSERT INTO tb_dosen VALUES('','$nama', '$pendidikan','$alamat', '$email', '$noTelp', '$dosenPA')");
    header('location:index.php?page=tambah_dosen');
?> -->