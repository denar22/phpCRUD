<?php
    include "config.php";

	$program_studi_id=$_GET['program_studi_id'];
	$sql=mysqli_query($con,"SELECT * FROM tb_program_studi WHERE program_studi_id='$program_studi_id'");
	while($r=mysqli_fetch_array($sql)){
?>

<div id="ModalEdit" class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Data Program Studi</h4>
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>

        <div class="modal-body">
        	<form action="index.php?page=update_progdi" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="nama_progdi">Nama Progdi</label>
                    <input type="text" name="nama_progdi"  class="form-control" value="<?php echo $r['nama_progdi']; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="jenjang">Jenjang</label>
                     <select class="form-control" id="level" name="jenjang" >
                        <option value="<?php 
                                            if( $r['jenjang_progdi']=='1'){
                                            echo"D3"
                                            }elseif ($r['jenjang_progdi']=='2') {
                                            echo "S1";
                                            }elseif ($r['jenjang_progdi']=='3') {
                                            echo "S2";
                                            }else{
                                            echo "S3";
                                         }
                                        ?>">
                        
                        </option>
                     </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="nama_kaprogdi">Nama kaprogdi</label>
     				<input type="text" name="nama_kaprogdi"  class="form-control" value="<?php echo $r['nama_kepala_progdi']; ?>"/>
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