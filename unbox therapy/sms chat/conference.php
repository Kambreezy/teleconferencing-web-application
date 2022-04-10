<?php require('Details.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Conference Room</title>
	<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/BreezyCustomStyles.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

	<style type="text/css">
	body{
		
	background-color:rgb(255,255,255);

    }
    </style>

 <div class="room col-lg-12 col-md-12 col-sm-12 col-xs-12">
 	<div class="room-overlay col-lg-12 col-md-12 col-sm-6 col-xs-6">
 	<h1><span class="glyphicon glyphicon-user" style="font-size:42px;color:rgb(0,0,255);left:10px;"></span><span class="glyphicon glyphicon-link" style="color:rgb(255,255,255); font-size:30px;"></span><span class="glyphicon glyphicon-user" style="font-size:40px; color:rgb(0,0,255);left:-10px;"></span>CONFERENCE ROOM<span class="glyphicon glyphicon-user" style="font-size:42px;color:rgb(255,0,0);left:10px;"></span><span class="glyphicon glyphicon-link" style="color:rgb(255,255,255); font-size:30px;"></span><span class="glyphicon glyphicon-user" style="font-size:40px; color:rgb(255,0,0);left:-10px;"></span></h1>
</div></div>


<div class="areaCover col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="areaCover-overlay col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<!--video part-->
<div class="videoArea col-lg-7 col-md-7 col-sm-7 col-xs-7" style="
background-image:url('images/686.jpg');">

<video id="video" class="potrait"></video>
<canvas id="canvas"><span class="glyphicon glyphicon-camera"></span></canvas>
</div>

<!--MESSAGE PART-->
<div class="messagePart col-lg-5 col-md-5 col-sm-12 col-xs-12">
	<div class="selfie col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p onclick="snap();"><span class="glyphicon glyphicon-camera"></span>&nbsp&nbspTake a selfie</p></div>

<div class="directMessage col-lg-12 col-md-12 col-sm-12 col-xs-12"><a data-target="#loginmodal" data-toggle="modal"><span class="glyphicon glyphicon-envelope"></span>&nbsp&nbspMessage Friend(s)</a></div>


<div class="leaveRoom col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="chat.php"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp&nbspLeave Room</a></div>

</div></div></div>


<!--mwssage modal that will pop up-->
<div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginmodal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form" >
<div class="panel" style="background-color:rgb(0,132,0);">
<p align="center"><font face="Agency FB"><font size="8"><font color="white">PAL CHAT</font></font></font></p>
</div>
<div class="modal-body">
<div class="panel-body">
     
     <div id="userFormArea" class="useRow">
     	<div class="col-md-12">
     		<form id="userForm">
				<div class="form-group">
					<label>Enter Username</label>
					<input class="form-control" id="username"/>
					<br/>
					<input type="submit" class="btn btn-primary" value="Start Chat" />
				</div></form></div></div>
<hr/>
	<div class="messageRow" id="messageArea">
		<div class="col-md-4">
			<div class="well">
				<h3>Online Users</h3>
				<ul class="list-group" id="users"></ul>
			</div>
		</div>
		<div class="col-md-8">
			<div class="chat" id="chat"></div>
			<form id="messageForm">
				<div class="form-group">
					<label>Enter Message</label>
					<textarea class="form-control" id="message"></textarea>
					<br/>
					<input type="submit" class="btn btn-primary" value="Send Message" />
				</div></form>

		</div>
	</div>

<hr/>

<button class="btn btn-danger btn-sm col-lg-12" type="modal-dismiss" name="close">CLOSE</button>
<!--The other user-->
</div></div></form></div></div></div>


<script type="text/javascript">
	//video functions
	var video=document.getElementById('video');
	var canvas=document.getElementById('canvas');
	var context=canvas.getContext('2d');

//activate the webcam
	navigator.getUserMedia =navigator.getUserMedia || navigator.webkitUser || navigator.mozGetUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia;
	if(navigator.getUserMedia){
		navigator.getUserMedia({video:true} ,streamWebcam , throwError);
	}
	function streamWebcam(stream){
		video.src=window.URL.createObjectURL(stream);
		video.play();
	}
	//if fail
	function throwError(e){
		alert(e.name);
	} 
	function snap(){
		canvas.width= video.clientWidth;
		canvas.height= video.clientHeight;
		context.drawImage(video,0,0);
	}
	//chat functions
		$(function(){
			var socket = io.connect();
			var $messageForm= $('#messageForm');
			var $message= $('#message');
			var $chat= $('#chat');//chatwindow
			var $userFormArea= $('#userFormArea');
			var $userForm= $('#userForm');
			var $messageArea= $('#messageArea');
			var $users= $('#users');
			var $username= $('#username');

//when message is submitted
		$messageForm.submit(function(e){
        e.preventDefault();
        socket.emit('send message', $message.val());
        $message.val('');
    });
        
 //user form submission
        $userForm.submit(function(e){
        	e.preventDefault();
        	socket.emit('new user', $username.val(), function(data){
        		if(data){
        			$userFormArea.hide();
        			$messageArea.show();
        		}
        	});
        	$username.val('');
        });
			
			socket.on('new message', function(data){
				$chat.append('<div class="well"><strong>'+data.user+'</strong>:'+data.msg+'</div>');
			});

//Get users
			socket.on('get users', function(data){
				var html='';
				for(i = 0;i < data.length;i++){
					html +='<li class="list-group-item">' +data[i]+'</li>';
				}
				$users.html(html);
			});
});

	</script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/socket.io/socket.io.js"></script>
<style>

</body>
</html>
<?php include('script.php'); ?>
<?php include('footnote.php'); ?>
