<?php

	$id = $_GET['id'];
	$hapus = mysqli_query($con, "DELETE FROM tb_user WHERE user_id = '$id' ");
	// $hapus = mysqli_query($con, "DELETE FROM tb_user WHERE user_id='$_GET[user_id]'");
	
	header("location:index.php?page=daftar_user");
?>