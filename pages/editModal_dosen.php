<?php
    include "config.php";
	$dosen_id=$_GET['dosen_id'];
	$sql=mysqli_query($con,"SELECT * FROM tb_dosen WHERE dosen_id='$dosen_id'");
	while($r=mysqli_fetch_array($sql)){
?>

<div id="ModalEdit" class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Data UserID</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>

        <div class="modal-body">
        	<form action="index.php?page=update_dosen" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">Dosen ID</label>
                    <input type="text" name="user_id"  class="form-control" value="<?php echo $r['dosen_id']; ?>" readonly/>
                </div>


                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Nama Dosen</label>
                    <input type="text" name="nama_dosen"  class="form-control" value="<?php echo $r['nama_dosen']; ?>" />
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="nama">Pendidikan Terakhir</label>
     				<select class="form-control" id="level" name="pendidikan_terakhir" >
                        <option><?php echo $r['pendidikan_terakhir']; ?></option>
                                <option value="1">S1</option>
                                <option value="2">S2</option>
                                <option value="3">S3</option>
                            </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="password">Alamat</label>
                    <input type="text" name="alamat"  class="form-control" value="<?php echo $r['alamat']; ?>"/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="password">Email</label>
                    <input type="text" name="email"  class="form-control" value="<?php echo $r['email']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="password">No HP</label>
                    <input type="text" name="nomer_hp"  class="form-control" value="<?php echo $r['nomer_hp']; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Description">Dosen PA</label>
                     <select class="form-control" id="level" name="dosen_pa" >
                        <option><?php echo $r['dosen_pa']; ?></option>
                                <option value="Y">YA</option>
                                <option value="N">TIDAK</option>
                            </select>
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