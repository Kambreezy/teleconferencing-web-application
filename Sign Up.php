<?php include('Details.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Africa+Coincide:Registration</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="BreezyCustomStyles.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/animate.css"  rel="stylesheet" />
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
<!--JAVASCRIPT-->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/jquery.backstretch.min.js"></script> 
<script src="js/wow.min.js"></script>  
<script src="js/wow.js"></script> 
<script src="js/retina.min.js"></script>   
<script src="js/main.js"></script>    
<script src="js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
	body{
		background-color: rgba(255,0,0,0.9);
	}
</style>
<div class="shub col-lg-12 col-md-12 col-sm-12 col-xs-12" id="shub">
  <div class="shub-overlay col-lg-5 col-md-5 col-sm-5 col-xs-5">
  <div class="africon-icon"></div></div>
    <div class="africon-title col-lg-7">
      <div class="africon-title-overlay wow fadeIn col-lg-12" data-wow-duration="3s">
<p><span style="color:rgb(255,255,255);">AFRICA</span>&nbspCOINCIDE</p>
</div></div>
  </div>
<div class="grp col-lg-12 col-md-12 col-sm-12 col-xs-12" style="
      font-size: 18px;
      ">
      <ul class="breadcrumb3 wow fadeIn" data-wow-duration="7s">
          <li><a href="index.php"  style="text-decoration: none;color: red;"><b>Exit</b></a></li>
        <li><a data-target="#loginmodal" data-toggle="modal" style="cursor: pointer;text-decoration: none;"><span class="glyphicon glyphicon-log-in" style="color: red"></span><font color="white">&nbsp&nbspLog In</font></a></li>
        <li><a href="about.php" style="text-decoration: none;"><font color="white">&nbspAbout</font></a></li> 
        <li><a href="contact.php" style="text-decoration: none;"><font color="white">&nbspContact</font></a></li> 
         <li><a href="Social Hub.php" style="text-decoration: none;"><font color="white">&nbspHome</font></a></li>
      </ul>
     
    </div>
</div>
 <!--modal that will pop up after login clicked -->    
<div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginmodal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form" method="POST" action="Details.php">
<div class="panel">
<div class="wellB">
<p align="center">WELCOME</p>
</div>
<div class="modal-body">
<div class="panel-body">
<label for="username" class="control-label"><span class="glyphicon glyphicon-user">
</span>&nbspUsername</label>
<input class="form-control" type="text" plceholder="Username" name="Username" placeholder="Enter username" required="" />
<br/><br/>
<label for="passwordl" class="control-label"><span class="glyphicon glyphicon-lock">
</span>&nbspPassword</label>
<input class="form-control" type="Password" placeholder="Enter Password" name="Password" required="" /><br/>
<div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>

<div class="modal-footer">
<button class="btn btn-success btn-sm" type="submit" name="login">Log In</button>
<button class="btn btn-danger btn-sm" data-dismiss="modal" type="submit" name="Close">Close</button>
<br/>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>

<div class="col-lg-7 col-md-offset-2 col-md-8 col-sm-12 col-xs-12" style="margin-top: 20px;">
<div class="panel">
<div class="signwell">
<p align="center" style="font-family: Century Gothic;font-size: 43px;color: white;"><b>Sign Up with Us</b></p>
</div>
<div class="panel-body">
<!--SIGN UP-->
<form class="form" action="Sign Up.php" method="post">
<label for="inputName">Surname</label>
<input class="form-control" type="text" name="Surname" id="Surname" placeholder="Surname" required="" />
</br>
<label for="inputName">First Name</label>
<input class="form-control" type="text" name="Firstname" id="FirstName" placeholder="First name" required="" />
</br>
<label for="inputDOB">Date of Birth</label>
<input class="form-control" type="date" name="DOB" id="DOB" required="" onchange="selectDOB();" />
<script type="text/javascript">
function selectDOB(){
  var mySelect   = document.getElementById("DOB");
  myInput.value = mySelect.options[mySelect.selectedIndex].value;
}
</script>
</br>
<div class="form-group">
<label for="inputGender">Gender</label>
<br/>
<select class="form-control" name="Gender" id="Gender" required="" onchange="selectGender();">
  <option>Male</option>
  <option>Female</option>
</select>
<script type="text/javascript">
function selectGender(){
  var mySelect   = document.getElementById("Gender");
  myInput.value = mySelect.options[mySelect.selectedIndex].value;
}
</script>
</div>
<br/>
<label for="inputCountry">Country</label>
</br>
<select type="text" name="Country" id="Country" onchange="selectCountryCode();" class="form-control">
<option value="code">***Choose country***</option>
<option value="+213">Algeria</option>
<option value="+244">Angola</option>
<option value="+229">Benin</option>
<option value="+267">Botswana</option>
<option value="+226">Burkina Faso</option>
<option value="+257">Burundi</option>
<option value="+238">Cape Verde</option>
<option value="+237">Cameroon</option>
<option value="+236">Central African Republic (CAR)</option>
<option value="+235">Chad</option>
<option value="+269">Comoros</option>
<option value="+243">Democratic Republic of the Congo</option>
<option value="+242">Republic of the Congo</option>
<option value="+225">Cote d'Ivoire</option>
<option value="+253">Djibouti</option>
<option value="+20">Egypt</option>
<option value="+240">Equatorial Guinea</option>
<option value="+291">Eritrea</option>
<option value="+251">Ethiopia</option>
<option value="+241">Gabon</option>
<option value="+220">Gambia</option>
<option value="+233">Ghana</option>
<option value="+224">Guinea</option>
<option value="+245">Guinea-Bissau</option>
<option value="+254">Kenya</option>
<option value="+266">Lesotho</option>
<option value="+231">Liberia</option>
<option value="+218">Libya</option>
<option value="+261">Madagascar</option>
<option value="+265">Malawi</option>
<option value="+223">Mali</option>
<option value="+222">Mauritania</option>
<option value="+230">Mauritius</option>
<option value="+212">Morocco</option>
<option value="+258">Mozambique</option>
<option value="+264">Namibia</option>
<option value="+227">Niger</option>
<option value="+234">Nigeria</option>
<option value="+250">Rwanda</option>
<option value="+239">Sao Tome and Principe</option>
<option value="+221">Senegal</option>
<option value="+248">Seychelles</option>
<option value="+232">Sierra Leone</option>
<option value="+252">Somalia</option>
<option value="+27">South Africa</option>
<option value="+211">South Sudan</option>
<option value="+249">Sudan</option>
<option value="+268">Swaziland</option>
<option value="+255">Tanzania</option>
<option value="+228">Togo</option>
<option value="+216">Tunisia</option>
<option value="+256">Uganda</option>
<option value="+260">Zambia</option>
<option value="+263">Zimbabwe</option>
     </select>
</br>
</br>
<div class="form-group">
<label for="phone">Phone number</label><br/>
<div class="form control input-small">
<div class="input-group input-small" >
        
             
             <span class="input-group-btn" size="1px;">
                <input readonly class="btn btn-primary" size="1px;" name="phone" id="phone" />
             </span>
             <input type="number" class="form-control" name="phone" required=""/>
             </div>
</span>
</div>
</div>
<script type="text/javascript">
function selectCountryCode(){
  var mySelect   = document.getElementById("Country");
  var myInput    = document.getElementById("phone");
  myInput.value = mySelect.options[mySelect.selectedIndex].value;
}
</script>
<br/>
<label for="email">Email</label>
<input class="form-control" type="email" name="Email" id="Email" for="Email" placeholder="Email Address@email.com" required="" /> 
</br>
<br/>
<label for="inputName">Username</label>
<input class="form-control" type="text" name="Username" id="Username" placeholder="Username" required="" />
</br>
<div class="form-group">
<label for="password">Password</label>
<input class="form-control" type="password" name="Password" id="password" for="password" placeholder="password" required="" />
</div>
<br/>
<div class="form-group">
<label for="confirm_password">Reenter password</label>
<input class="form-control" type="password" id="confirm_password" for="confirm_password" placeholder="password"  required="" />
<script type="text/javascript">
function validatePassword(){
  var password= document.getElementById("password");
var confirm_password =document.getElementById("confirm_password");
  if(password.value != confirm_password.value){
    confirm_password.setCustomValidity("Passwords Don't Match");
  }else{
    confirm_password.setCustomValidity('');
  }
}
password.onchange=validatePassword;
confirm_password.onkeyup=validatePassword;

</script>
</div>

<br/>
<div class="form-group">
	<label for="inputDescription" > Tell us about yourself<br/>
	<textarea class="form-control" rows="7" cols="90"  name="About" placeholder="About me" required=""></textarea></label>
</div>
<div class="form-group">
 <input class="btn btn-success" type="submit" name="register" value="Submit" onsubmit="return checkForm()"/>
  <br/>
</div>
<p>Already have an account? <a data-target="#loginmodal" data-toggle="modal" style="cursor: pointer;">Log In</a></p>
</form>
</div>
</div>
</div>
<?php include('footnote.php'); ?>
</body>
</html>