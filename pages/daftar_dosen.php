<?php includeHeader(); ?>


<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Daftar Dosen</li>
</ol>
<table id="tableDosen" border="1" class="table table-hover">
 <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Pendidikan Terakhir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">No Telp</th>
      <th scope="col">Dosen PA</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
 <tbody>
      
    <?php 
      // if (mysqli_num_rows($sql)>0){
      $sql = mysqli_query($con,"SELECT * FROM tb_dosen ");
      $no=1;
      while($data=mysqli_fetch_array($sql)){
    ?>
    <tr >
      <td> <?php echo $no++; ?></td>
      <td> <?php echo $data['nama_dosen']; ?></td>
      <td>
       <?php  
        if($data['pendidikan_terakhir']=="0"){
           echo "S1";
        }else if ($data['pendidikan_terakhir']=="1") {
           echo "S2";
        }else{
          echo "S3";
        }
       ?>
       </td>
      <td> <?php echo $data['alamat']; ?></td>
      <td> <?php echo $data['email']; ?></td>
      <td> <?php echo $data['nomer_hp']; ?></td>
      <td> 

        <?php
        if($data['dosen_pa']=='Y'){
          echo "YA";
        }else{
          echo "TIDAK";
        }

        ?>
        </td>
      <td>
        <a  role="button" href="#" class='open_modal' id='<?php echo  $data['dosen_id']; ?>'>Edit</a>|
        <!-- <a class="button btn-warning" role="button" href="index.php?page=edit_user&user_id=<?php echo $data['user_id'];?>">Edit</a> | -->
        <a class="button btn-danger" role="button" href="index.php?page=hapus_dosen&dosen_id=<?php echo $data['dosen_id'];?>" onclick="return confirm('apakah anda yakin menghapus data?')" >Hapus</a>
      </td>
    <?php 
     }
     ?>
    </tr>

  </tbody>
 <!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

  <!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
             url: "index.php?page=editModal_dosen",
             type: "GET",
             data : {dosen_id: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>



<script>
        $(document).ready( function () {
            $('#tableDosen').DataTable();
        } ); 
    </script>
</table>


</div>
<?php 
  includeFooter();
 ?>