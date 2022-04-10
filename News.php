<?php require('Details.php'); 
if(empty($_SESSION['Username'])){
	header('location:Social Hub.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>News+Feed</title>
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

<!--menu-->
<!--brief description-->
<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" style="
height: 200px;
background-color: black;
box-shadow: 1px 1px 5px 1px black;
margin-bottom: 1px;
">
<p align="center" style="padding-top:40px;color:white; font-size: 50px;font-family: Agency FB;text-shadow: 1px 1px 1px 1px black;">WELCOME TO YOUR HUB</p>
<nav class="navbar2 navbar-nav navbar-inverse" style="
margin-bottom: 0px;
margin-top: 20px;
">
<ul class="nav navbar-nav wow bounce" data-wow-duration="3s">
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



<!--politics content-->
<div class="col-lg-12 wow fadeIn" data-wow-duration="3s" style="height: auto;background-color:  rgba(157,63,0,0.7);padding-top: 0px;padding-bottom:70px; margin-bottom: 10px; box-shadow: 1px 0px 7px 1px rgba(157,63,0,0.7);">
<div class="col-lg-offset-5 col-lg-6">
<font size="9"><font color="white"><font face="Agency FB">POLITICS</font></font></font></p>
</div>

<div class="news-well col-lg-10 col-lg-offset-1" style="background: rgb(0,0,0);">
	<div class="col-lg-3" style="padding-left:0px;">
	<img src="images/Mandela.jpg" style="height:398px;" class="image-responsive" />
</div>
<div class="con-info col-lg-8" style="color: white; overflow:hidden; overflow-x: hidden;">
	<p readonlt="">A hero amongst us, a soldier ready to die for what is right. That is what Nelson Mandela stood for.<br/><span style="font-size:30px;">"</span>Education is the most powerful weapon which you can use to change the world<span style="font-size:30px;">"</span>&nbsp~<i>Nelson Mandela</i></p>
	</div>
</div>

<div class="news-well col-lg-10 col-lg-offset-1 wow fadeIn" data-wow-duration="4s" style="background: rgb(0,130,185);">

<div class="col-lg-8" style="padding-left:0px;">
	<img src="images/cool.jpg" style="height:398px;" class="image-responsive" />
</div>
<div class="con-info col-lg-3">
	<p readonlt="">Most African countries are nowadays allowing women to be in power. It is such a huge change for the government to incorporate such laws and women are able to face equality and participate in the emerging country issues.</p>
	</div>

</div>
</div>
<!--end of politics container-->

<!--gossip container-->
<div class="col-lg-offset-5 col-lg-6 wow fadeIn" data-wow-duration="5s">
<font size="9"><font color="red"><font face="Agency FB">E-NEWS</font></font></font></p>
</div>
<div class="news-well col-lg-10 col-lg-offset-1  wow fadeIn" data-wow-duration="6s" style="background: rgb(237,27,37);">

<div class="col-lg-8" style="padding-left:0px;">
	<img src="images/213900.jpg" style="height:398px;" class="image-responsive" />
</div>
<div class="con-info col-lg-3">
	<p readonlt="">For those who thought Cocacola was done,think again. The latest can contains 60 calories per 8-oz. It has 35% fewer calories than any other colas.</p>
	</div>
</div>

<div class="news-well col-lg-10 col-lg-offset-1  wow fadeIn" data-wow-duration="7s"  style="background: rgb(138,55,0);">

<div class="col-lg-3" style="padding-left:0px;">

	<img src="images/lady6.jpg" style="height:400px;width:relative;" class="image-responsive" />
</div>
<div class="con-info col-lg-8">
	<p readonlt=""><h2><u>African trends of 2018</u></h2>
		<h3>2018 is here. Are you Ready?</h3>
	    <ol type="1">
	    	<li>AFRICAN MAGIC</li>
	         <h4>2017 saw 2.7% growthm up from 2016's 1.3%- a modest recovery for sub-saharan Africa. It's clear that the stubborn relics of Africa's post-colonial struggles are finally crumbling, in ways that cliched narratives and labels such as 'Africa Rising' could never quite capture.<br/>
	         Revolutionary times mean that many Africans no longer want products and services that channel the spirits of their colonoal forefathers.&nbspInstead,&nbspthey are aspiring to a new African standard, that sets superior benchmarks and positively brands Africa on the global stage</h4>
	        <li>MANIFEST EMPATHY</li>
	        <h4>In Africa, the future of human brands is empathetic brands.</h4>
	        <li>GREEN ARMY</li>
	        <h4>In 2018, the pendulum of sustainability will swing between the preventative and restorative.</h4>
	        <li>CITIZEN WOKE</li>
	        <h4>Global brands must strive to decolonize consumerism in 2018</h4></ol></p>
	
	</div>

</div>
</div>
<!--end of gossip-->
<!--Sports container-->
<div class="sportsCon col-lg-12">
<div class="col-lg-offset-5 col-lg-6 wow fadeIn" data-wow-duration="9s">
<font size="9"><font color="white"><font face="Agency FB">SPORTS</font></font></font></p>
</div>

<div class="news-well col-lg-10 col-lg-offset-1 wow fadeIn" data-wow-duration="9s"  style="background: rgb(100,100,100);">

<div class="col-lg-4" style="padding-left:0px;">
	<img src="images/foot2.jpg" style="height:398px;" class="image-responsive" />
</div>
<div class="con-info col-lg-7" style="color: white;">
	<p readonlt="">Russia, known for its massive development as a first world country hosted the July 2018 world cup. We all know hosting a match like that has its advantages and disadvantages.However in this case, the merits were all in favor. Russia having its diverse resources was able to run the event(that took one month) smoothly with no hic-ups. The revenue collected within that period was approximated to about $900bn.</p>
	</div>

</div>

<div class="news-well col-lg-10 col-lg-offset-1 wow fadeIn" data-wow-duration="10s"  style="background: rgb(24,131,56);">

<div class="col-lg-8" style="padding-left:0px;">
	<img src="images/football-ball-background.jpg" style="height:398px;" class="image-responsive" />
</div>
<div class="con-info col-lg-3" style="color: white;">
	<p readonlt="">The world cup that was held in Russia on July 2018, was one bumpy ride for some of the teams but one thing that amazed all football funs was the fact that a lot of good teams such as Portugal, Germany, Brazil and Argentina did not even qualify for the semi-finals. Dissapointement as well as joy were the most common vivid emotions throughout the cup.</p>
	
	</div>

</div>
</div>
<!-- end of sports container-->
<?php require('footnote.php');?>
</body>
</html>
