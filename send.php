<?php
mysql_connect('localhost', 'root' , '');
or die (1);

mysql_select_db('county');
or die(2);

//check if message empty
if (strlen($message)<1){
	echo 3;
}

//if message is long
else if (strlen($message)>255){
	echo 4;
}

//if name is null
else if (strlen($name)<1){
	echo 5;
}

//if name is long

else if (strlen($name)>29){
	echo 6;
}

//verify name

else if (mysql_num_rows(mysql_query("select * from chat where name= '". $name . "' and ip != '" . @$REMOTE_ADDR . " ' ")) != 0){
	echo 7;
}

//if a okay

else{
	//contains charactr htat be removed from message and name because everybody elese could redirect script or links

	$search = array("<" . ">" , ">" ,"<");

	//insert new row into chat table

	mysql_query("insert into chat values ('" .time() . "' , '" . str_replace($search, " ", $name) . "' , '" . @$REMOTE_ADDR . "' , '" .str_replace($search, " ", $message) . "')") or die(8);
}

?>