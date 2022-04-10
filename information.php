<?php
$con=mysql_connect('localhost' ,'root' , '');
$database=mysql_select_db('polepole',$con);
if(isset($_POST['register'])){
$Surname=$_REQUEST['Surname'];
$Firstname=$_REQUEST['Firstname'];
$Country=$_REQUEST['Country'];
$Email=$_REQUEST['Email'];
$DOB=$_REQUEST['DOB'];
$Gender=$_REQUEST['Gender'];
$phone=$_REQUEST['phone'];
$Username=$_REQUEST['Username'];
$About=$_REQUEST['About'];

$sql= "SELECT FROM populate ( Surname , Firstname , Country , DOB , Gender , phone , Email , Username , About ) VALUES ('$Surname', '$Firstname' , '$Country' ,'$DOB' ,'$Gender' , '$phone' , '$Email' , '$Username' , '$About' )";
$db=mysql_query($sql,$con);
}
?>