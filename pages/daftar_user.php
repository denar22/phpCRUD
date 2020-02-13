<?php includeHeader();

//   if(empty($_SESSION['Login'])){
//     $_SESSION['eror'] = '<strong>ERROR!!!</strong>Anda harus login dulu';
//     header('location: ./');
//     die();
// }else{
?>
<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Daftar User</li>
</ol>
<button type="button" class="btn btn-success" href="index.php?page=tambah_user">Tambah</button>
<table id="tableUser" border="1" class="table table-hover">

 <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
     <th scope="col">User id</th>
      <th scope="col">Nama</th>
      <th scope="col">Password</th>
      <th scope="col">Level</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql = mysqli_query($con,"SELECT * FROM tb_user ");
      $no=1;
      while($data=mysqli_fetch_array($sql)){
    ?>
    <tr>
      <td> <?php echo $no++; ?></td>
      <td> <?php echo $data['user_id']; ?></td>
      <td> <?php echo $data['nama']; ?></td>
      <td> <?php echo $data['password']; ?></td>
      <td> <?php echo $data['level']; ?></td>
      <td>


      
         <a  role="button" href="#" class='open_modal' id='<?php echo  $data['user_id']; ?>'>Edit</a>|
        <!-- <a class="btn-warning" role="button" href="index.php?page=edit_user&user_id=<?php echo $data['user_id'];?>">Edit</a> --> |
          <a class="btn-danger" role="button" href="index.php?page=hapus_user&user_id=<?php echo $data['user_id'];?>">Hapus</a>

        

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
             url: "index.php?page=editModal_user",
             type: "GET",
             data : {user_id: m,},
             success: function (ajaxData){
               $("#ModalEdit").html(ajaxData);
               $("#ModalEdit").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>

</table>
<script>
        $(document).ready( function () {
            $('#tableUser').DataTable();
        } ); 
    </script>
    

</div>
<?php 
  includeFooter();
 ?>