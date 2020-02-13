<?php
session_start();
require_once('config.php');
require_once('includes/fungsi.php');
?>
<!-- /*
iiset : untuk mengecek ada atau tidaknya sebuah variabel / data
*/
 -->
 
<?php 
$page = isset($_GET['page']) ? $_GET['page'] : '';


if (!empty($page)){
	if(file_exists('pages/'. $page. '.php')){
		include 'pages/' . $page. '.php';
	}else{
		include 'pages/home.php';
		}
}else{
    include 'pages/home.php';

}

 ?>