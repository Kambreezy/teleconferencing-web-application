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
$Password=$_REQUEST['Password'];
$Password=md5($Password);
$About=$_REQUEST['About'];
$sql= "INSERT INTO populate ( Surname , Firstname , Country , DOB , Gender , phone , Email , Username , Password , About ) VALUES ('$Surname', '$Firstname' , '$Country' ,'$DOB' ,'$Gender' , '$phone' , '$Email' , '$Username' , '$Password' , '$About' )";
$query="SELECT * FROM populate WHERE Username='$Username' , Surname='$Surname', About='$About' , Firstname='$Firstname' , Country='$Country' , Gender='$Gender' , phone='$phone' AND Password='$Password' ";
$result=mysql_query($query,$con);
if(mysql_num_rows($result)==1){
$_SESSION['Username']=$Username;
$_SESSION['Password']=$Password;
$_SESSION['Surname']=$Surname;
$_SESSION['Firstname']=$Firstname;
$_SESSION['Country']=$Country;
$_SESSION['DOB']=$DOB;
$_SESSION['Gender']=$Gender;
$_SESSION['phone']=$phone;
$_SESSION['Email']=$Email;
$_SESSION['About']=$About;
}
}
?>