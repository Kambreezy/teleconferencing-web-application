<?php include('Details.php'); 
if(empty($_SESSION['Username'])){
	header('location:Social Hub.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latest+Events</title>
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
<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" style="
height: 200px;
background-color: black;
box-shadow: 1px 1px 10px 1px black;
margin-bottom: 20px;
">
<p align="center" style="padding-top:40px;color:white; font-size: 50px;font-family: Agency FB;text-shadow: 1px 1px 1px 1px black;">WELCOME TO YOUR HUB</p>
<nav class="navbar2 navbar-nav navbar-inverse " style="
margin-bottom: 0px;
margin-top: 20px;
">
<ul class="nav navbar-nav">
<li><a href="homepage.php"><span class="glyphicon glyphicon-globe" style="color: gold;"></span>&nbsp&nbspMy Hub</a></li>
<li><a href="News.php">News Feed</a></li>
<li><a href="Events.php">Events Update</a></li>
<li class="dropup"  style="position:right font-size: 16px;cursor: pointer;">
	<a class="dropdown-toggle" data-toggle="dropdown">
		<?php if (isset($_SESSION['Username'])): ?>
<strong><font color="orange"><?php echo $_SESSION['Username']; ?></font></strong>
<?php endif ?>&nbsp</a>
		<ul class="dropdown-menu" style="background-color: rgb(0,0,0);">
			<li><a href="logout.php" style="color: white;background-color: black;"><span class="glyphicon glyphicon-log-out"></span>&nbspLog Out</a></li>
				</ul>
			</li>
</ul>
</nav>
</div>
<style type="text/css">
	body{
		background-image: url('images/bo.jpg');
		background-size:52%;
	}
</style>

<!--content-->
<div class="bridge col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="SocialWell wow fadeIn" data-wow-duration="3s">
</div>
<div class="well wow fadeIn" data-wow-duration="4s" style="margin-top: 0px; opacity: 0.8; height: 110px; padding-top: 2px; border-radius: 0px 0px 2px 2px;">
<p><font face="Impact">World Earth day never got better than this.<br/>Participate in making the world green again.</font>
</p>
<p align="right">
<a href="https://www.greenday.com"><button class="btn btn-sm btn-success wow bounce" data-wow-duration="4s">Participate</button></a>
</p>
</div>
</div>

<div class="bridge col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="SocialWell2 wow fadeIn" data-wow-duration="5s">
</div>
<div class="well wow fadeIn" data-wow-duration="6s" style="margin-top: 0px; opacity: 0.8; height: 110px; padding-top: 2px; border-radius: 0px 0px 2px 2px;">
<p><font face="Impact">Fashion week with the most voted fahion icons all over Africa.<br/>Get to see the latest fashion out there.</font>
</p>
<p align="right">
<a href="https://africafashionguide.wordpress.com/"><button class="btn btn-sm btn-danger wow bounce" data-wow-duration="6s" style="">Visit</button></a>
</p>
</div>
</div>

<div class="bridge col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="SocialWell3 wow fadeIn" data-wow-duration="3s">
</div>
<div class="well wow fadeIn" data-wow-duration="3s" style="margin-top: 0px; opacity: 0.8; height: 110px; padding-top: 2px; border-radius: 0px 0px 2px 2px;">
<p><font face="Impact">The world of music is rapidly getting famous with new artists coming up to the spotlights.</font>
</p>
<p align="right">
<a href="https://www.festicket.com"><button class="btn btn-sm btn-primary wow bounce" data-wow-duration="3s" style="">More...</button></a>
</p>
</div>
</div>
<div class="bridge col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="SocialWell4 wow fadeIn" data-wow-duration="4s">
</div>
<div class="well wow fadeIn" data-wow-duration="4s" style="margin-top: 0px; opacity: 0.8; height: 110px; padding-top: 2px; border-radius: 0px 0px 2px 2px;">
<p><font face="Impact">The entertainment industry says jazz is of African origin and people need to familiarise themselves with it.</font>
</p>
<p align="right">
<a href="https://www.festicket.com"><button class="btn btn-sm btn-success wow bounce" data-wow-duration="4s" style="">Discover</button></a>
</p>
</div>
</div>
<div class="bridge col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="SocialWell5 wow fadeIn" data-wow-duration="5s">
</div>
<div class="well wow fadeIn" data-wow-duration="5s" style="margin-top: 0px; opacity: 0.8; height: 110px; padding-top: 2px; border-radius: 0px 0px 2px 2px;">
<p><font face="Impact">The last coke studio event in Lekki was a blast.<br/>However there was a lot of drama though.</font>
</p>
<p align="right">
<a href="https://www.coca-cola.co.ke"><button class="btn btn-sm btn-danger wow bounce" data-wow-duration="5s" style="">More...</button></a>
</p>
</div>
</div>
<div class="bridge col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="SocialWell6 wow fadeIn" data-wow-duration="6s">
</div>
<div class="well wow fadeIn" data-wow-duration="6s" style="margin-top: 0px; opacity: 0.8; height: 110px; padding-top: 2px; border-radius: 0px 0px 2px 2px;">
<p><font face="Impact">Museums in different parts of the continent have come up with one massive expo.</font>
</p>
<p align="right">
<a href="https://www.africa.com"><button class="btn btn-sm btn-primary wow bounce" data-wow-duration="3s">Visit</button></a>
</p>
</div>
</div>

<?php include('footnote.php'); ?>
</body>
</html>
