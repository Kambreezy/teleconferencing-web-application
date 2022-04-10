<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>www.africacoincide.com</title>
<head>
	<meta charset="utf-8">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="BreezyCustomStyles.css" rel="stylesheet"/>

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</head>
<body>
	<div class="preload" id="preload">
	<div class="africon-icon1 col-lg-offset-2 col-lg-6 col-md-offset-2 col-md-6 col-sm-offset-2 col-sm-6 col-xs-offset-2 col-xs-6">
<div class="logo-title col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p style="font-size: 80px;color: rgb(255,0,0);">AFRICA<span style="color:rgb(164,82,0); ">&nbspCOINCIDE</span></p>
</div>
<div class="loader-frame">
<div class="load1" id="load1"></div>
<div class="load2" id="load2"></div>
	</div>
	</div>
	<script type="text/javascript">
		(function(){
			var preload=document.getElementById("preload");
		var loading=0;
		var id=setInterval(frame,64);

		function frame(){
			if(loading==100){
          clearInterval(id);
          window.open("Social Hub.php","_self");
			}else{
				loading=loading + 1;
				if(loading==90){
					preload.style.animation="fadeout 1s ease";
				}
			}
		}
	})();
		
	</script>
</body>
</html>