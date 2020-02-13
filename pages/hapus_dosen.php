<?php

	// $id = $_GET['id'];
	// $hapus = mysqli_query($con, "DELETE FROM tb_user WHERE user_id = '$id' ");
	$hapus = mysqli_query($con, "DELETE FROM tb_dosen WHERE dosen_id='$_GET[dosen_id]'");
	
	header("location:index.php?page=daftar_dosen");
?>