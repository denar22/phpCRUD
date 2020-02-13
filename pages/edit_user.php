<?php includeHeader(); ?>

<?php 
include 'config.php';
$user_id = $_GET ['user_id'];
$sqlEdit = mysqli_query($con, "SELECT * FROM tb_user WHERE user_id='$user_id'");
// $sqlEdit = mysqli_query($con, "SELECT * FROM tb_user WHERE user_id='$_GET[user_id]'");
while($e=mysqli_fatch_array($sqlEdit)){
 ?>
<div class="container">
        <div class="col-6">
            <form method="POST" action="index.php?page=update_user">
                <fieldset>
                    <legend>EDIT UserID</legend>
                    <div class="form-group">
                        <input type="text" class="form-control" id="user_id" name="user_id" value="<?php echo $e['user_id'];?>" placeholder="User ID">
                        <br>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $e['nama'];?>" placeholder="Nama">
                        <br>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $e['password'];?>" placeholder="Password">
                        <br>
                        <div class="form-group">
                            <select class="form-control" id="level" name="level" value="<?php echo $e['level'];?>">
                                <option>admin</option>
                                <option>user</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="submit" class="btn btn-secondary">Reset</button>
                </fieldset>
            </form>
            </div>
        </div>
<?php
}   
?>




<?php includeFooter(); ?>