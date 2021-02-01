<?php
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)){
    header("Location: ./index.php?errorfields");
    exit();
  }
  else{
    if($email== "admin@gmail.com" && $password == "admin"){
      session_start();
      $_SESSION['email'] = $email;
      header("Location: ./panel.php?loggedin");
      exit();
    }
    else{
      header("Location: ./index.php?error=wrongCredentias");
      exit();
    }
  }
}