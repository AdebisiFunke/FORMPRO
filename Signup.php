<?php $page_title = 'Sign Up';
include('header.php');
include("sidesection2.php");
?>
<div class="container">
  <form method="post" action="signup_script.php">
<div class="form-group row">
	<label class="col-sm-2 col-form-label">First Name:</label> <input class="col-sm-4 form-control" type="text" name="first_name" size="15" maxlength="20" value="<?php if (isset($trimmed['first_name'])) echo $trimmed['first_name']; ?>" required />
	</div>
<div class="form-group row">
	<label class="col-sm-2 col-form-label">Last Name:</label> <input class="col-sm-4 form-control" type="text" name="last_name" size="15" maxlength="40" value="<?php if (isset($trimmed['last_name'])) echo $trimmed['last_name']; ?>" required />
	</div>
<div class="form-group row">
	<label class="col-sm-2 col-form-label">Email Address:</label> <input class="col-sm-4 form-control" type="email" name="nemail" size="25" maxlength="40" value="<?php if (isset($trimmed['nemail'])) echo $trimmed['nemail'];?>" required />
	</div>
<div class="form-group row">
	<label class="col-sm-2 col-form-label">Confirm Email Address:</label> <input class="col-sm-4 form-control" type="email" name="remail" size="20" maxlength="40" value="<?php if (isset($trimmed['remail'])) echo $trimmed['remail']; ?>" required /> 
	</div>
<div class="form-group row">
	<label class="col-sm-2 col-form-label">Password:</label> <input class="col-sm-4 form-control" type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($trimmed['pass'])) echo $trimmed['pass']; ?>"  required/>
	</div>
<div class="form-group row">
	<label class="col-sm-2 col-form-label">Retype Password:</label> <input class="col-sm-4 form-control" type="password" name="rpass" size="10" maxlength="20" value="<?php if (isset($trimmed['rpass'])) echo $trimmed['rpass']; ?>"  required />
	</div>
<div class="form-group row">
	<label class="col-sm-2 col-form-label">Phone Number:</label> <input class="col-sm-4 form-control"type="tel" name="tnumber" size="15" maxlength="20" value="<?php if (isset($trimmed['tnumber'])) echo $trimmed['tnumber']; ?>" required />
	</div>
<div class="form-group row">
	<label class="col-sm-2 col-form-label">Alternate Phone Number:</label> <input class="col-sm-4 form-control"  type="tel" name="anumber" size="15" maxlength="40" value="<?php if (isset($trimmed['anumber'])) echo $trimmed['anumber']; ?>" required />
	</div>
<div class="form-group row">
	<label class="col-sm-2 col-form-label">Date of Birth:</label> <input class="col-sm-4 form-control" type="date" name="birth_date" size="15" maxlength="20"  value="<?php if (isset($trimmed['birth_date'])) echo $trimmed['birth_date']; ?>" placeholder="(MM/DD/YYYY)" required/>
</div>
<button type="submit" class="btn btn-primary">SIGNUP</button>
<button type="#" class="btn btn-primary">CANCEL</button>
     		 </form>
<?php include ('footer.php'); ?>
