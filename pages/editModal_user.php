<?php
    include "config.php";
	$user_id=$_GET['user_id'];
	$sql=mysqli_query($con,"SELECT * FROM tb_user WHERE user_id='$user_id'");
	while($r=mysqli_fetch_array($sql)){
?>

<div id="ModalEdit" class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>

        <div class="modal-body">
        	<form action="index.php?page=update_user" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">User ID</label>
                    <input type="text" name="user_id"  class="form-control" value="<?php echo $r['user_id']; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="nama">Nama</label>
     				<input type="text" name="nama"  class="form-control" value="<?php echo $r['nama']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="password">Password</label>
                    <input type="text" name="password"  class="form-control" value="<?php echo $r['password']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Description">Level</label>
                     <select class="form-control" id="level" name="level" >
                        <option><?php echo $r['level']; ?></option>
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                            </select>
                    <!-- <input type="text" name="level"  class="form-control" value="<?php echo $r['level']; ?>"/> -->
                </div>

                

	            <div class="modal-footer">
	                <button class="btn btn-success" name="confirm" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

            </div>

           
        </div>
    </div>
<?php 
}
?>