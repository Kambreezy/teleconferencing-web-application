
var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io').listen(server);
var Peer = require('webrtc.io');
var peer = new Peer ()({
	trickle: false,
	stream : true
});

server.listen(process.env.PORT || 3030);

//console library
console.log('Server running at port 3030.....');


//create route
app.get('/', function(req, res){//request n response
	res.sendFile(__dirname + '/index.html');
});

io.sockets.on('connection' , function(socket){
	connections.push(socket); //if it connects
	//number of connected users
	console.log('Connected: %s sockets running',connections.length);//sockets is same as users
});
//disconnect
socket.on('disconnect', function(data){
	users.splice(users.indexOf(socket.username),1);
	updateUsernames();
	//delete user on disconnect
connections.splice(connections.indexOf(socket),1);
console.log('disconnected: %s sockets running' , connections.length);//socket is same as users
});

//establish signal detection
peer.on('signal', function (data){
	document.getElementById('username').value= JSON.stringify(data)
});
document.getElementById('connect').addEventListener('click', function (){
	var friend = JSON.parse(document.getElementById('friend').value)
	peer.signal(friend)

  peer.on('stream', function(stream){
  	var video = document.createElement('video')
  	document.body.appendChild(video)

  	video.src= window.URL.createObjectURL(stream)
  	video.play()
  
},function (err){
	console.error(err)
});

//new user
socket.on('new user', function(data,callback){
	callback(true);
	socket.username = data;
	users.push(socket.username);
	updateUsernames();
});	
     function updateUsernames(){
     	io.sockets.emit('get users', users); //display users
     }
}); 

