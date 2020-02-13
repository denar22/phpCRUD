<?php includeHeader(); ?>


<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Daftar Progdi</li>
</ol>
<table id="tableProgdi" border="1" class="table table-hover">

 <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenjang</th>
      <th scope="col">Nama Kaprogdi</th>
       <th scope="col">Aksi</th>
    </tr>
  </thead>
 <tbody>
    <?php 
      $sql = mysqli_query($con,"SELECT * FROM tb_program_studi");
      $no=1;
      while($data=mysqli_fetch_array($sql)){
    ?>
    <tr >
      <td> <?php echo $no++; ?></td>
      <td> <?php echo $data['nama_progdi']; ?></td>
      <td> 
        <?php
         if ($data['jenjang_progdi']=='1'){
            echo "D3";
         }elseif ($data['jenjang_progdi']=='2') {
            echo "S1";
         }elseif ($data['jenjang_progdi']=='3') {
            echo "S2";
         }else{
            echo "S3";
       }

        ?>
      </td>
      <td> <?php echo $data['nama_kepala_progdi']; ?></td>
      <td>
         <a  role="button" href="#" class='open_modal' id='<?php echo  $data['program_studi_id']; ?>'>Edit</a>|
        <!-- <a class="btn-primary" role="button" href="index.php?page=edit_user&user_id=<?php echo $data['user_id'];?>">Edit</a> | -->
        <a class="button btn-primary" role="button" href="index.php?page=hapus_progdi&program_studi_id=<?php echo $data['program_studi_id'];?>">Hapus</a>
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
             url: "index.php?page=editModal_progdi",
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
            $('#tableProgdi').DataTable();
        } ); 
    </script>
</table>


</div>
<?php 
  includeFooter();
 ?>