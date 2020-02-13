<?php
includeHeader();
?>
    <div class="container">
        <div class="col-6">
            <form method="post" action="index.php?page=tambah_user">
                <fieldset>
                    <legend>Tambah User</legend>
                    <div class="form-group">
                        <input type="text" class="form-control" id="user_id" name="user_id" placeholder="User ID">
                        <br>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        <br>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <br>
                        <div class="form-group">
                            <select class="form-control" id="level" name="level">
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="submit" class="btn btn-secondary">Reset</button>
                </fieldset>
            </form>
            </div>
        </div>


<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //variabel dari elemen form

    $user_id     = $_POST['user_id'];
    $nama        = $_POST['nama'];
    $password    = $_POST['password'];
    $level       = $_POST['level'];

    if($user_id==''|| $nama==''|| $password==''|| $level==''){
        echo "Form belum lengkap!!!";
    }else{
        //proses simpan data
        $simpan = mysqli_query($con, "INSERT INTO tb_user(user_id, nama, password, level) VALUES ('$user_id', '$nama','$password', '$level')");

        if(!$simpan){
            echo "Simpan data gagal !!";
        }else{
            echo "Data Tersimpan";;
        }
    }
}
?> 
       
            <?php includeFooter();