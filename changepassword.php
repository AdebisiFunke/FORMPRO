<?php $page_title = 'Change Your Password';
include('header.php');
include("sidesection2.php");
?>
<form action="change_password_script.php" method="post">
<fieldset>
	<div class="form-group row"><label class="col-sm-2 col-form-label"> Email Address:</label> 
		<input class="col-sm-4 form-control"     id="text" type="text" name="nemail" size="20" maxlength="60" value="<?php if (isset($_POST['nemail'])) echo $_POST['nemail']; ?>" required /> 
	</div>
	<div class="form-group row"><label class="col-sm-2 col-form-label">Current Password:</label> <input class="col-sm-4 form-control"     id="text" type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required  />
	</div>
	<div class="form-group row"><label class="col-sm-2 col-form-label">New Password:</label> <input class="col-sm-4 form-control"    id="text" type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" required  />
	</div>
	<div class="form-group row"><label class="col-sm-2 col-form-label">Confirm New Password:</label> <input class="col-sm-4 form-control"    id="text" type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2'];?>"  required   />
	</div>
	<button type="submit" class="btn btn-primary">RESET</button>
<?php include ('footer.php'); ?>
