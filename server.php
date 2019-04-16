<?php
session_start();

// initializing variables
$username = "";
$email    = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration') or die('could not connect to database');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);

  $mobno = mysqli_real_escape_string($db, $_POST['mobno']);





  $sex=mysqli_real_escape_string($db, $_POST['sex']);


    
  $dob = mysqli_real_escape_string($db, $_POST['dob']);

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $workexperience = mysqli_real_escape_string($db, $_POST['workexperience']);
  $education = mysqli_real_escape_string($db, $_POST['education']);



  
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($mobno)) { array_push($errors, "Mobile No is required"); }
  if (empty($education)) { array_push($errors, "Education is required"); }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");}

  
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "This email already has a registered username");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = ($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, password, mobno, sex, dob, email, country, workexperience, education ) 
  			  VALUES('$username', '$password', '$mobno', '$sex', '$dob', '$email', '$country', '$workexperience', '$education')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: about.php');
  }
}



//Login User
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index1.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}




//search




if(isset($_REQUEST["submit"]))
{


  $keywords = 'keyword1, keyword2';

  $result = array();
  $keyword_tokens = explode(',', $keywords);
  foreach($keyword_tokens as $keyword) {
      $keyword = mysqli_real_escape_string($db,trim($keyword));
      $sql = "SELECT * FROM users WHERE username like '%keyword1' and '%keyword2';";
  // query and collect the result to $result
  // before inserting to $result, check if the id exists in $result.
  // if yes, skip.
}
return $result;



}


?>