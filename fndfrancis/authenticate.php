<?php
  $username = $_POST['username'];
  $password = $_POST['password'];


  require 'includes/dbconnect.php';
  if ($conn -> connect_error){
    die($conn -> connect_error);
  }
  else{
    $query = "select id from users where username='$username' and password='$password'";
    $results = $conn ->query($query);
    if ($results -> num_rows ===0) {
      header('Location: /fndfrancis/login.php?invalid=1');
    } else {
      $row = $results -> fetch_assoc();
      $userid = $row['id'];

      session_start();
      $_SESSION['userid'] = $userid;
      $_SESSION['username'] = $username;

      //header('Location: /fndfrancis/home.php?username='.$username);
      header('Location: /fndfrancis/home.php');
    }
  }

?>
