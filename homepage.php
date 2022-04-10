<?php include('Details.php'); 
if(empty($_SESSION['Username'])){
	header('location:Social Hub.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My+Social+Hub</title>
</head>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="BreezyCustomStyles.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/animate.css"  rel="stylesheet" />
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css" />
<!--JAVASCRIPT-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-3.2.1.js"></script> 
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
		background-color: rgb(0,0,0);
	}
</style>
<!--content-->

<!--brief description-->
<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="3s" style="
height: 200px;
background-color: black;
box-shadow: 1px 1px 10px 1px black;
">
<p align="center" style="padding-top:40px;color:white; font-size: 50px;font-family: Agency FB;text-shadow: 1px 1px 1px 1px black;">WELCOME TO YOUR HUB</p>
<nav class="navbar2 navbar-nav navbar-inverse wow bounce" data-wow-duration="4s" style="
margin-bottom: 0px;
margin-top: 20px;
">
<ul class="nav navbar-nav">
<li><a style="cursor: pointer;" data-target="#bar" data-toggle="collapse"><span class="glyphicon glyphicon-globe" style="color: gold;"></span>&nbsp&nbspMy Hub</a></li>
<li><a href="News.php">News Feed</a></li>
<li><a href="Events.php">Events Update</a></li>
<li class="dropup"  style="position:right font-size: 16px;cursor: pointer;">
	<a class="dropdown-toggle">
		<?php if (isset($_SESSION['Username'])): ?>
<strong><font color="orange"><?php echo $_SESSION['Username']; ?></font></strong>
<?php endif ?>&nbsp</a>
			</li>
</ul>
</nav>
</div>


<div class="CutContainer collapse in col-lg-2 col-md-2 col-sm-2 col-xs-12 " id="bar">
<!--side menu-->
<nav class="navmenu navbar-inverse"
style="background-color: rgba(0,0,0,0);">
<ul class="nav navbar-nav wow fadeInDown" data-wow-duration="3s">
<li><a href="conference.html" style="color: white;"><span class="glyphicon glyphicon-phone"></span>&nbsp&nbspChat</a></li><br/>

<li><a href="profile.php" style="color: white;"><span class="glyphicon glyphicon-user" style="color: white;"></span>&nbsp&nbspMy Profile</a></li><br/>
			
			<li><a href="logout.php" style="color: white;background-color:none;"><span class="glyphicon glyphicon-log-out"></span>&nbspLog Out</a></li>
			
</ul>

</nav>

</div>
<!--the sdebar-->


<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="
padding-left: 0px;
padding-right: 0px;
">

<div class="pp col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="3s" style="
background-color: white;
opacity: 0.9;
">
<p ><h3 style="font-family: Candara;color: orange;"><b>Let's Chat <span  class="glyphicon glyphicon-phone"></span></b></h3>
<hr/></p>
<p align="left" style="font-family: Agency FB;font-size: 20px;color: black;">The chat section enables you to connect to your friends through a peer-to-peer network.In other words you can get in touch with multiple of your friends.All you have to do is simply click on the chat section on the left bar(or <a href="conference.html">here</a>).You will be redirected to your chat room where you will have to set up a Username for anonimity or else the system will generate a random ID for you.You can also edit your Username any time you want.Online friends will be visible on an online section where you can then click on their IDs to initialise a chat.Connection is made immediately so no need to wait.Remember you can also chat with multiple friends if you want a group chat by simply clicking on their IDs.So go ahead and give it a try;have fun!</p>

</div>

<div class="pp col-lg-12  col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="4s" style="
background-color: white;
opacity: 0.9;">
<p ><h3 style="font-family: Candara;color: orange;"><b>~&nbsp<span class="glyphicon glyphicon-user"></span>My Friends </b></h3>
<hr/></p>
<p align="left" style="font-family: Agency FB;font-size: 20px;color: black;">The Friends List in the online section reveals to you of how many friends are online. To begin a chat click on the username of your online friends. So go ahead and make new friends!</p>

</div>
<div class="pp col-lg-12  col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="5s" style="
background-color: white;
opacity: 0.9;">
<p ><h3 style="font-family: Candara;color: orange;"><b>~&nbsp<span class="glyphicon glyphicon-facetime-video"></span>&nbspVideo Calls</b></h3>
<hr/></p>
<p align="left" style="font-family: Agency FB;font-size: 20px;color: black;">To begin a video call click on the video call icon and this will automatically send a notification to your friend that you want to chat. If your friend accepts the call then you will be redirected to a video room.</p>

</div>

<div class="pp col-lg-12  col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="6s" style="
background-color: white;
opacity: 0.9;">
<p ><h3 style="font-family: Candara;color: orange;"><b>~&nbsp<span class="glyphicon glyphicon-phone"></span>&nbspPhone Calls</b></h3>
<hr/></p>
<p align="left" style="font-family: Agency FB;font-size: 20px;color: black;">To initialize phone calls, click on the phone icon to send a notification to your friend that you want to call. Upon accepting the call, a black screen will pop up with no video. Do not worry, this is because the phone call will disable any video stream.</p>

</div>

<div class="pp col-lg-12  col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="8s" style="
background-color: white;
opacity: 0.9;">
<p ><h3 style="font-family: Candara;color: orange;"><b>My Profile <span class="glyphicon glyphicon-user"></span></b></h3>
<hr/></p>
<p align="left" style="font-family: Agency FB;font-size: 20px;color: black;">This section displays your personal information. It contains your profile picture, username, network ID, status and country. You can edit some of the sections if you want to using the Edit button. All the above information is visible to the public.</p><br/>

<div class="col-lg-offset-4 col-lg-6">
	<p>-&nbsp<small><i>For more queries and complaints <a href="Contact.php">Contact Us</a> or <a href="email.php">Email Us</a></i></small>&nbsp-</p>
</div>


</div>
</div>

	<?php include('footnote.php'); ?>
</body>
</html>