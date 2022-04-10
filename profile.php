<?php require('Details.php'); 
if(empty($_SESSION['Username'])){
	header('location:Social Hub.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My+Profile</title>
</head>


<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="BreezyCustomStyles.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/animate.css"  rel="stylesheet" />
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css" />
<!--JAVASCRIPT-->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/jquery.backstretch.min.js"></script> 
<script src="js/wow.min.js"></script>  
<script src="js/wow.js"></script> 
<script src="js/retina.min.js"></script>   
<script src="js/main.js"></script>    
<script src="js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<style type="text/css">
	body{
		background-image:url('images/bo.jpg');
		background-size:cover;
	}
</style>

<div class="col-lg-10 col-lg-offset-1 well" style="margin-top:140px; background-color:rgba(0,130,185,0.8);padding-left:0px; padding-right:0px; ">
<h1><p align="center" style="font-family:Agency FB; margin-bottom:2px; color:white;"><b>MY ACCOUNT DETAILS</b></p></h1>
<div class="panel col-lg-12" style="height:500px; text-align: center;background-color:rgba(25,25,25,0.9);padding-left:0px; padding-right:0px;margin-top:0px;cursor:pointer;">
	<form class="col-lg-12" style="color:white;">
<h4>Username:&nbsp&nbsp<label><?php if (isset($_SESSION['Username'])): ?><?php echo $_SESSION['Username']; ?>
<?php endif ?></label></p></h4>
<hr>
<h4>Phone:&nbsp&nbsp<label><?php if (isset($_SESSION['phone'])): ?><?php echo $_SESSION['phone']; ?>
<?php endif ?></label></p></h4>
<hr>
<h4>Email:&nbsp&nbsp <label><?php if (isset($_SESSION['Email'])): ?><?php echo $_SESSION['Email']; ?>
<?php endif ?></label></p></h4>
<hr>
<h4>Country Code:&nbsp&nbsp <label><?php if (isset($_SESSION['Country'])): ?><?php echo $_SESSION['Country']; ?>
<?php endif ?></label></p></h4>
<hr>
<h4>About You:&nbsp&nbsp<label><?php if (isset($_SESSION['About'])): ?><?php echo $_SESSION['About']; ?>
<?php endif ?></label></p></h4>
<hr>
<h4>Date of birth:&nbsp&nbsp<label><?php if (isset($_SESSION['DOB'])): ?><?php echo $_SESSION['DOB']; ?>
<?php endif ?></label></p></h4>
<hr>
<h4>Firstname:&nbsp&nbsp<label><?php if (isset($_SESSION['Firstname'])): ?><?php echo $_SESSION['Firstname']; ?>
<?php endif ?></label></p></h4>
<hr>
<h4>Surname:&nbsp&nbsp<label><?php if (isset($_SESSION['Surname'])): ?><?php echo $_SESSION['Surname']; ?>
<?php endif ?></label></p></h4>

</form>
</div><br/>
<div class="button col-lg-offset-6" style="
margin-bottom:0px;"><a href="homepage.php"><button class="btn btn-sm btn-danger" style="right:0;"><label>Back</label></button></a></div>
	</div>
</html>