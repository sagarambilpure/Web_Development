<?php
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

require 'includes/dbconnect.php';
if ($conn -> connect_error){
  die($conn -> connect_error);
}
else{
  $query = "select id, username, gender, country from users where id != $userid";
  $results = $conn -> query($query);
  }
?>
<!doctype html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Friends List</title>
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
      </div>
    </div>
    <table>
      <tbody>
        <?php
          while($row = $results -> fetch_assoc()){
          ?>
          <tr>
            <td><?php echo ($row['username']);?></td>
            <td><?php echo ($row['gender']);?></td>
            <td><?php echo ($row['country']);?></td>
          </tr>
          <?php
            }
          ?>
      </tbody>
    </table>
  </body>
</html>
