<?php
includeHeader();
?>
 <?php 
        if (isset($_SESSION['login'])) {
         ?> 
	    <div class="row">
	    <div class="col-lg-12">
	        <h2>SELAMAT ANDA BERHASIL LOGIN</h2>
	</div>
	</div>

<?php 
}
 ?>

<?php  includeFooter();
