<?php include('code.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>INFORMATION</title>
</head>
<body>
<form method="$_REQUEST" action="pple.php">
<h2>YOUR NAME IS: <input type="text" value="<?php if (isset($_SESSION['name'])): ?><?php $_REQUEST['name']; ?>" readonly="" /></h2>
<h2>YOUR PASSWORD IS: <input type="text" value="<?php if (isset($_SESSION['password'])): ?><?php $_REQUEST['password']; ?>" readonly="" /></h2>
<h2>YOUR GENDER IS: <input  type="text" value="<?php if (isset($_SESSION['Gender'])): ?><?php $_REQUEST['Gender']; ?>" readonly="" /></h2>
</form>
</body>
</html>
