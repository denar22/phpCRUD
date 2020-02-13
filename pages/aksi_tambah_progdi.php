 <?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    //variabel dari elemen form

    $nama_progdi   = $_POST['nama_progdi'];
    $jenjang       = $_POST['jenjang'];
    $nama_kaprogdi  = $_POST['nama_kaprogdi'];


    if($nama_progdi==''|| $jenjang==''|| $nama_kaprogdi==''){
        echo "Form belum lengkap!!!";
    }else{
        //proses simpan data 
        $simpan = mysqli_query($con, "INSERT INTO tb_program_studi (nama_progdi, jenjang_progdi, nama_kepala_progdi) VALUES ('$nama_progdi', '$jenjang', '$nama_kaprogdi')");

        if(!$simpan){
            echo "Simpan data gagal!!";
        }else{
            echo "<script>window.location='index.php?page=daftar_progdi'</script>";
        }
    }
}
?>
