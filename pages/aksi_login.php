<?php 
$user_id = $_POST['user_id'];
$nama 	= $_POST ['nama'];
$password= $_POST['password'];

$sql = "SELECT * FROM tb_user WHERE user_id='$user_id' AND password='$password'";

$exe= mysqli_query($con,$sql);
$num= mysqli_num_rows($exe);

if ($num>0) {

	$row=mysqli_fetch_object($exe);
	$_SESSION['login']='Ya';
	$_SESSION['UserID']=$row->user_id;
	$_SESSION['Nama']=$row->nama;
	$_SESSION['Password']=$row->password;
	$_SESSION['Level']=$row->level;
	header('location:index.php');

	}else{

		header('location:index.php?page=login&error=1');
}

?>

