<?php
session_start();

// initializing variables
$fullname = "";
$email    = "";
$password = "";
$errors = array(); 

// connect to the database
//sign-up name might change, depending on the db table name
$db = mysqli_connect('localhost', 'root', '', 'sign-up');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fullname)) { array_push($errors, "Full Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE fullname='$fullname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['fullname'] === $fullname) {
      array_push($errors, "Name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
    //Remove password encryption
    //$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (fullname, email, password) 
  			  VALUES('$fullname', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['fullname'] = $fullname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.php');
  }
}

// LOGIN Client
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    //Remove password encryption
  	//$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../index.php');
 
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
    // LOGIN ARTIST
  if(isset($_POST['login_artist'])) {

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
      array_push($errors, "Email is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {

      $query = "SELECT * FROM artists WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['success'] = "Welcome to Art Town, " . $email;
        header('location: ../index.php');
  
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }

}

?>
