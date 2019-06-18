<?php
  session_start();
  //$username = $_GET['username'];
  $username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/fndfrancis/css/app.css">
  </head>
  <body>
    <div class="upper-container">
      <?php require 'includes/header.php'; ?>
    </div>
    <div class="">
      <img src="images/dead_pool_yo.jpeg">
      <div class="menu-bar">
        <a href="/fndfrancis/friends.php">Friends</a>
        <a href="/fndfrancis/view_finding.php">FndFrancis</a>
      </div>
    </div>
  </body>
</html>
