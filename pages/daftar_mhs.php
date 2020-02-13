<?php includeHeader(); ?>


<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Daftar Dosen</li>
</ol>
<table id="tableMhs" border="1" class="table table-hover">

 <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tahan Masuk</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Dosen PA</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
<?php 
  $sql = mysqli_query($con,"SELECT * FROM tb_mahasiswa ");
  $no=1;
  while($d=mysqli_fetch_array($sql)){
    echo "<tr>
      <td>$no</td>
      <td>$d[nim]</td>
      <td>$d[nama_mhs]</td>
      <td>$d[tempat_lahir]</td>
      <td>$d[tahun_masuk]</td>
      <td>$d[dosen_pa]</td>
      <td>
        <a href='edit_user.php?id=$d[user_id]'>Edit</a> /
        <a href='hapus_user.php?id=$d[user_id]'>Hapus</a>
      </td>
    </tr>";
    $no++;
  }
  ?>
  </tbody>
<script>
        $(document).ready( function () {
            $('#tableMhs').DataTable();
        } ); 
    </script>
</table>
</div>
<?php 
  includeFooter();
 ?>