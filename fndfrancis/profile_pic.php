<?php
  //$username = $_GET['username'];

  session_start();
  $userid = $_SESSION['userid'];

  require 'includes/dbconnect.php';
  if ($conn -> connect_error){
    die($conn -> connect_error);
  }
  else{
    $query = "select profile_pic_path from users where id=$userid";
    $results = $conn ->query($query);

    $row = $results -> fetch_assoc();
    $pic_path = $row['profile_pic_path'];
    $content = file_get_contents($pic_path);
    header('Content-Type: image/jpeg');
    echo($content);
  }

?>
