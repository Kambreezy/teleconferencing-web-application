<?php require('Details.php'); 
if(empty($_SESSION['Username'])){
    header('location:Social Hub.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Conference Room</title>
    <!-- Bootstrap Core CSS -->
    
<link href="bootstrap/js/bootstrap.js" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="BreezyCustomStyles.css" rel="stylesheet"/>
<link href="sidebar.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="stylez.css" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="agency.css" rel="stylesheet">


    <script src="js/peer.js"></script>
    <script src="js/app.js"></script>
    <script src="js/peer-client.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
    <div class="titleContainer col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="titleStyle">
    <p>CHAT HUB</p>
</div>
</div>

<!--menu-->
<nav class="navbarCon nav-navbar navbar-inverse">
    <ul type="none">
        <li><a href="conference.php"><span class="glyphicon glyphicon-refresh"></span>&nbspRefresh</a></li>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp
        <li><a href="homepage.php"><span class="glyphicon glyphicon-log-out"></span>&nbspLog out</a></li>
    </ul>
</nav>

    <section id="chat-app">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-md-6 mb-4">
    				Your ID: <h4 id="peer-id" data-toggle="tooltip" data-placement="top" title="Click to copy peer ID"></h4>
                    <a href="#getUserNameModal" data-toggle="modal">change</a>
    			</div>
    			<div class="col-lg-6 col-md-6 mb-5 hide">
    				<div class="form-inline">
						<div class="form-group mr-sm-3">
							<label for="inputPeerUserId" class="sr-only" required="">Password</label>
							<input type="text" class="form-control" id="inputPeerUserId" placeholder="Enter your friends ID">
						</div>
						<button type="button" class="btn btn-outline-primary" id='connect-btn'>Connect</button>
					</div>
    			</div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Online Users</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="onlinepeers"></ul>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
    </section>

    <div class="container-fluid chat-container">
		<div class="row">
		</div>
    </div>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->
    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal" id="videoCallPanel" tabindex="-1" role="dialog" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal end-call hide" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="title">Video Call</h2>
                                <div class="pure-u-2-3" id="video-container">
                                    <video id="their-video" autoplay=""></video>
                                    <video id="my-video" muted="true" autoplay=""></video>
                                </div>
                                
                                <div class="text-center mt-3">
                                    <button type="button" class="btn btn-secondary mute-audio ml-3 mt-2"><i class="fa fa-microphone-slash"></i>Mute Audio</button>
                                    <button type="button" class="btn btn-secondary mute-video ml-3 mt-2"><i class="fa fa-video-camera"></i>Mute Video</button>
                                    <button type="button" class="btn btn-danger end-call ml-3 mt-2" data-dismiss="modal"><i class="fa fa-times"></i>End Call</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="getUserNameModal" tabindex="-1" role="dialog" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop='static'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" required="">Enter your Name</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="user-name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-primary username-done">Done</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="callConfirmationModal" tabindex="-1" role="dialog" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop='static'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title peer-name"></h5>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger reject-call" data-dismiss="modal">Reject</button>
                    <button type="button" class="btn btn-primary accept-call" data-dismiss="modal">Accept</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</body>
</html>
