<?php include('Details.php'); 
if(empty($_SESSION['Username'])){
	header('location:Social Hub.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
</head>
<link href="bootstrap/js/bootstrap.js" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="BreezyCustomStyles.css" rel="stylesheet"/>
<style type="text/css">
	body{
		background-color:rgb(70,70,70);
	}
</style>
<?php require('menu.php'); ?>
<div class="col-lg-9">
<p><h3 style="color: red;font-family: Impact;">1-ON-1 Chat&nbsp<span class="glyphicon glyphicon-eye-open"></span></h3><hr/></p>
</div>
<div class="well col-lg-offset-2 col-lg-4" style="
border-radius: 7px 7px 7px 7px;
margin-top: 30px;
margin-bottom: 80px;">
<form>
<label >MY ID:</label><br/>
<input class="form-control" type="text" id="yourId" value="<?php if (isset($_SESSION['Username'])): ?><?php echo $_SESSION['Username']; ?>
<?php endif ?>" readonly="" /><br/>
<label>FRIEND ID:</label><br/>
<input class="form-control" type="text" id="otherID" placeholder="e.g A1B2C3" required="" /><br/>
<button class="btn btn-success btn-sm" style="float: right;" id="connect">Connect</button><br/>
</form>
</div>

<div class="col-lg-9">
<p><h3 style="color: red;font-family: Impact;">Group Chat&nbsp<span class="glyphicon glyphicon-"></span></h3><hr/></p>
</div>
<div class="col-lg-9">
<div class="well col-lg-7" style="
border-radius: 7px 7px 7px 7px;
margin-top: 10px;
margin-bottom: 30px;">
<form>
<label >MY ID:</label><br/><br/>

<label>CREATE CONFERENCE ROOM ID:</label><br/>
<input class="form-control" type="text" id="otherID" placeholder="e.g  1234" required="" /><br/>
<label>SEND CONFERENCE ID TO:</label><br/>
<input class="form-control" type="text" id="otherID" placeholder="Select two or more pals IDs" required="" /><br/>
<button class="btn btn-primary btn-sm" style="float: right;" id="invite">Invite</button><br/><br/>
<p><button class="btn btn-success btn-sm" id="connect">Launch conference room&nbsp</button></p>

</form>
</div>
<div class="well col-lg-offset-1 col-lg-4" style="
border-radius: 7px 7px 7px 7px;
margin-top: 10px;
padding-left: 0px;
padding-top: 0px;
padding-right: 0px;
margin-bottom: 30px;
min-height: 400px;">
<div class="palpanel">
	<p align="center" style="color: white; font-family: Impact; font-size: 18px;">ONLINE PALS</p>
</div>
<form>

</form>
</div>
</div>
<!--
<script type="bundle.js" charset="utf-8"></script>-->

</body>
</html>
