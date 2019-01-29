<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 

$host = 'mpcs53001.cs.uchicago.edu';
$username = 'zhc008';
$password = 'voh9eiHo';
$database = $username.'DB';


// Attempting to connect 
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());

// Register
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($dbcon, $_POST['username']);
  $email = mysqli_real_escape_string($dbcon, $_POST['email']);
  $password_1 = mysqli_real_escape_string($dbcon, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($dbcon, $_POST['password_2']);

  // Check whether the user input all required information
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Passwords do not match");
  }

  // Check if user already exists in the database
  $user_check_query = "SELECT * FROM Registration WHERE Username='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($dbcon, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { 
    if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Register the user if no errors occur
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO Registration (Username, Email, Password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($dbcon, $query);
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: main.php');
  }
}

// Login
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($dbcon, $_POST['username']);
  $password = mysqli_real_escape_string($dbcon, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Please Enter the Username");
  }
  if (empty($password)) {
  	array_push($errors, "Please Enter the Password");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM Registration WHERE Username='$username' AND Password='$password'";
  	$results = mysqli_query($dbcon, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Logged in Successfully";
  	  header('location: main.php');
  	}else {
  		array_push($errors, "Please Enter the Correct Username/Password Combination");
  	}
  }
}

?>