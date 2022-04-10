<!DOCTYPE html>
<html>
<head>

	<title>auto</title>
</head>

<body>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="BreezyCustomStyles.css" rel="stylesheet"/>
<button class="btn btn-primary btn-sm pull-right"  data-target="#loginmodal" data-toggle="modal">Login</button>
<div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginmodal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form" method="POST" action="log in.php">
<div class="panel">
<div class="wellB">
<p align="center"><font face="Impact"><font size="12"><font color="white">WELCOME</font></font></font></p>
</div>
<div class="modal-body">
<div class="panel-body">
<script type="text/javascript">
$confirm=disp_alert();
function disp_alert()
{
alert("Wrong Username/Password");
}
</script>
<label for="username" class="control-label"><span class="glyphicon glyphicon-user">
</span>&nbspUsername</label>
<input class="form-control" type="text" plceholder="Username" name="Username" placeholder="Enter username" required="" />
<br/><br/>
<label for="passwordl" class="control-label"><span class="glyphicon glyphicon-lock">
</span>&nbspPassword</label>
<input class="form-control" type="Password" placeholder="Enter Password" name="Password" required="" /><br/>
<div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
<p>Don't have an account? <a href="Sign Up.php">Sign Up</a></p>
<div class="modal-footer">
<button class="btn btn-success btn-sm" type="submit" name="login">Log In</button>
<button class="btn btn-danger btn-sm" data-dismiss="modal" type="submit" name="Close">Close</button>
<br/>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>

<?php require('script.php'); ?>
</body>
</html>