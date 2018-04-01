<?php $page_title = 'Login Into Your Existing Account';
include('header.php');
include('sidesection2.php');
 ?>
<form method="post" action="loginscript.php">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Email Address:</label>
		 <input type="text" class="col-sm-4 form-control" name="nemail" size="25" maxlength="60" value="<?php if (isset($_POST['nemail'])) echo $_POST['nemail']; ?>" required />
	
	</div>
	<div class="form-group row mb-4">
		<label class="col-sm-2 col-form-label">Password:</label> 
		<input type="password" class="col-sm-4 form-control" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required/>   
	</div>
	<div class="col-sm-8">
		<div class="row">
			<div class="col-sm-4">
				<button type="submit" class="btn btn-primary">LOGIN</button>
     			<button type="#" class="btn btn-primary">CANCEL</button></div>	
			<div class="col-sm-8">
				<h6 class="pt-2">Forgot Password? <a href="changepassword.php" class="pl-2">Reset Your Password</a></h6>
		
			</div>
		</div>
</div>
</form>
<?php include ('footer.php'); ?>