<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '','registration');

if (isset($_POST['admin'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($name)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0){
  	
  	$query = "SELECT * FROM tbAdministrators WHERE name='$name' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['name'] = $name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: admin/index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>