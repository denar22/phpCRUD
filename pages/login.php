<?php
includeHeader();
?>
<div class="form-group">
	<div class="col-lg-4">
	<form method="post" action="index.php?page=aksi_login">
		<fieldset>
        <legend>Login</legend>
		    <div class="form-group">
		        <label for="user_id">User ID</label>
		        <input type="text" class="form-control" id="user_id" name="user_id" placeholder="User ID">
		  	</div>
               
	   		 <div class="form-group">
	     		 <label for="Password">Password</label>
	     		 <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	   		</div>
    	<button type="submit" class="btn btn-primary">Login</button>
 		</fieldset>
 	</form>

<?php includeFooter(); 