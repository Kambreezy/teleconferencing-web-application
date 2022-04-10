<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<link href="bootstrap/js/bootstrap.js" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="BreezyCustomStyles.css" rel="stylesheet"/>
</head>
<body>
	<div class="preload" id="preload">
<div class="ll">
<p style="font-size: 80px;">AFRICA&nbsp<span style="color: red;">CONNECT</span></p><br/>
<p><h1><span style="font-family:Agency FB;padding-left: 110px;color: rgb(242,242,242); text-shadow: -1px 2px 2px black;"> Linking Greatness amongst the Greatest</span></h1></p>
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
<?php require('script.php'); ?>
</body>
</html>