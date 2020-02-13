
 <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //variabel dari elemen form

    $NIM         = $_POST['NIM'];
    $nama        = $_POST['nama'];
    $lahir       = $_POST['lahir'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $progdi      = $_POST['progdi'];
    $dosenPA     = $_POST['dosenPA'];

    if($NIM==''|| $nama==''|| $lahir==''|| $tahun_masuk==''|| $progdi==''||$dosenPA==''){
        echo "Form belum lengkap!!!";
    }else{
        //proses simpan data guru
        $simpan = mysqli_query($con, "INSERT INTO tb_mahasiswa(nim, nama_mhs, tempat_lahir, tahun_masuk, program_studi_id, dosen_pa )
                                             VALUES ('$nama', '$pendidikan','$alamat', '$email', 'noTelp', 'dosenPA')");

        if(!$simpan){
            echo "Simpan data gagal!!";
        }else{
            header('location:index.php?page=daftar_dosen');
        }
    }
}
?>
