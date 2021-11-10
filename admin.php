<?php $page = 'admin';
include('server2.php');
include("includes/header.php"); ?>
</br>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="admin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>name</label>
  		<input type="text" name="name" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="admin">Login</button>
  	</div>
  	<p>
  		ARE you an admin? <a href="login.php">Sign in </a> as an user.
  	</p>
  </form>
</body>
</html>
</br>
<?php
include("includes/footer.php"); ?>
