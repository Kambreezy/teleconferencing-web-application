<?php
session_start();
$dbhost='localhost:5050';
$dbuser='Kambreezy';
$dbpass=md5($dbpass);
$dbpass='lifeisgood';
$con=mysql_connect($dbhost,$dbuser,$dbpass);
$nickname=$_REQUEST['nickname'];

//check connection
if(! $con){
	die('Oops.No connection could be established'.mysql_error());
}
echo 'Connection was successful';

$database='CREATE Database USERS';
$retval=myql_query($database,$conn);

if(! $retval){
	die('Database could not be created.Try again.'.mysql_error());
}

echo "Database users was created successfully\n";

//select database
mysql_select_db('USERS');
$sql="CREATE TABLE Nicknames ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nickname VARCHAR(30) NOT NULL, reg_date TIMESTAMP)";

//check table
if(mysql_query($con,$sql)){
	echo "Table was successfully created";
}else{
	echo "There was an error encountered in Table creation".mysql_error($con);
}
mysql_close($con);
session_destroy();
?>