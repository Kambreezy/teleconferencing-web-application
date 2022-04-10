
<?php include('Details.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Email+Us</title>
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
<body>
	<style type="text/css">
		body{
			background-color: rgb(0,132,162);
			color:rgb(255,255,255);
		}
	</style>
<div class="ewell col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="5s">
	<p><h2>&nbspEMAIL US&nbsp</h2></p>
</div>
<div class="container wow slideInLeft" data-wow-duration="2s">
<p><h4 style="font-family: Comic Sans MS;">Write to us, we appreciate your feedback.&nbspWe will get back to you as soon as we can.</h4></p>
</div>
<br/><br/>
<form class="col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-sm-offset-2 col-sm-9 col-xs-offset-2 col-xs-9 wow fadeIn" data-wow-duration="4s" style="
margin-bottom: 40px;" action="mailto:africacoincide@gmail.com">
	<p><b>From:</b>&nbsp<label id="User"><input class="form-control" type="email" style="width: 400px;" placeholder="Your email address" required="" /></label></p><br/>
<p><b>To:</b>&nbsp<label><input class="form-control" style="width: 400px;" readonly="" placeholder="africacoincide@gmail.com" /></label></p><br/>
<p><label>Message:</label><textarea id="Sms" class="form-control" type="text" style="min-width: 300px; min-height: 300px;" placeholder="Your Message goes here" required="" > </textarea></p><br/>

<div class="col-lg-offset-10 col-lg-11 btn-group wow bounceIn" data-wow-duration="4s">
<button class="col-lg-1 btn btn-success" onclick="redirect();"><a style="text-decoration:none; color: rgb(255,255,255);"><b><span class="glyphicon glyphicon-home" style="font-size: 18px;"></span></b></a></button>
<button class="col-lg-1 btn btn-danger" type="submit"><span class="glyphicon glyphicon-send" style="font-size: 18px;"></span></button>
</div>
</form>
<script type="text/javascript">
	function redirect(){
		window.open("homepage.php","_self");
	}
</script>
<?php include('footnote.php'); ?>
</body>
</html>