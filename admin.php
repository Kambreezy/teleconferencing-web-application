<?php require('Details.php'); 
if(empty($_SESSION['Username'])){
	header('location:Social Hub.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>
</head>
<link href="bootstrap/js/bootstrap.js" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="BreezyCustomStyles.css" rel="stylesheet"/>
<link href="css/sidebar.css" rel="stylesheet"/>

<body>
<style type="text/css">
	body{
		background-color: rgba(0,0,0,0.8);
		cursor: pointer;
	}
</style>
<div  id="admin" class="jumbotron col-lg-12" style="background-color: rgb(0,0,0);box-shadow: 0px 0px 2px 1px rgb(255,255,255); color:rgb(255,255,255);margin-bottom: 80px;text-align: center;">
	<h1>ADMINISTRATOR PANEL</h1>
</div>
<div class="well col-lg-12" style="text-align: center;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px; cursor: pointer;margin-bottom: 150px;">
	<div class="panel col-lg-12" style="text-align: center; font-size:20px;height: 80px;padding-top: 20px;font-family: Century Gothic;">
		<p><span class="glyphicon glyphicon-user"></span>&nbspWelcome back Administrator</p>
	</div>
	<form class="col-lg-12" style="font-family: Century Gothic;">
		<h4>LIST OF USERS INFORMATION IN REAL TIME&nbsp<label style="float: right;"><a href="logoutadmin.php" style="text-decoration:none; color:rgb(255,0,0);">Logout</a></label></h4><hr/>
		<table class="table">
			<thead>
				<tr>
				<td><label>Identity</label></td>
				<td><label>Surname</label></td>
				<td><label>Firstname</label></td>
				<td><label>Country Code</label></td>
				<td><label>DOB</label></td>
				<td><label>Gender</label></td>
				<td><label>phone</label></td>
				<td><label>Email</label></td>
				<td><label>Username</label></td>
				<td><label>Password</label></td>
				<td><label>About</label></td>
				</tr></thead>
				
<?php
$con=mysql_connect('localhost' ,'root' , '');
$database=mysql_select_db('polepole',$con);
$query = "SELECT * FROM populate"; 
$result = mysql_query($query);

echo "<tbody>"; 

while($row = mysql_fetch_array($result)){  
echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['Surname'] ."</td><td>" . $row['Firstname'] ."</td><td>" . $row['Country'] ."</td><td>" . $row['DOB'] ."</td><td>" . $row['Gender'] ."</td><td>" . $row['phone'] ."</td><td>" . $row['Email'] . "</td><td>" . $row['Username'] ."</td><td>" . $row['Password'] ."</td><td>" . $row['About'] ."</td></tr>"; 
}

echo "</tbody>";

mysql_close(); 
?>
		</table></form></div>

<div data-target="#admin" class="floater col-lg-1 col-lg-offset-11">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</div>

	<div class="footinfo col-lg-12 col-md-12 col-sm-12 col-xs-12"" style="color: rgb(255,255,255);font-size:15px; font-family: Century Gothic;padding-top: 10px;position:fixed; bottom: 0;cursor: none;">
		<p>Copyright@&nbsp2018.&nbsp&nbsp&nbspProperty of Amos Kamau.&nbsp&nbsp&nbspAll Rights Reserved</p>
	</div>
</body>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/wow.js"></script>
<script src="js/carousel.js"></script>
<script src="js/retina.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</html>