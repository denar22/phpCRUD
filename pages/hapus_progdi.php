<?php

	// $id = $_GET['id'];
	// $hapus = mysqli_query($con, "DELETE FROM tb_user WHERE user_id = '$id' ");
	$hapus = mysqli_query($con, "DELETE FROM tb_program_studi WHERE progdi_studi_id='$_GET[program_studi_id]'");
	
	header("location:index.php?page=daftar_progdi");
?>