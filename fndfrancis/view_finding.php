<?php
session_start();
$username=$_SESSION['username'] ;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/fndfrancis/css/app.css">
    <script src="/fndfrancis/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/fndfrancis/js/view_finding.js"></script>
  </head>
  <body>
    <div class="upper-container">

    <?php include 'includes/header.php' ?>

    </div>
    <div>
      <img src="/fndfrancis/images/dead_pool_yo.jpeg" alt="">
    </div>
    <div class="menu-bar">
      <a href="/fndfrancis/friends.php">Friends</a>
      <a href="/fndfrancis/view_finding.php">Find francis</a>
    </div>
    <div >
      <div class="finding_form_container" style="width:30%;text-align:center;float:left;">
        <form  method="post" action="/fndfrancis/save_finding.php">
          <p>
            <input type="text" placeholder="approxiamte age" id="age" name="age">
          </p>
          <p>
            <input type="text" placeholder="approxiamte height" id="height" name="height">
          </p>
          <p>
            <textarea  rows="8" cols="80" placeholder="Address Spots" style="width : 30%;" id="address" name="address"></textarea>
          </p>
          <p>
            <button type="button" >save</button>
          </p>
        </form>
      </div>
      <div class="finding_list"  style="width:70%; text-align:center; float:right;"></div>
    </div>
  </body>
</html>
