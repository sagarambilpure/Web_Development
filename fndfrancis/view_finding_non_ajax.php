<?php
session_start();
$userid = $_SESSION['userid'];
$username=$_SESSION['username'] ;

require "includes/dbconnect.php";

if($conn -> connect_error){
  die($conn -> connect_error);
}else{
  $query = "select * from findings where user_id = $userid";
  $results = $conn->query($query);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/fndfrancis/css/app.css">

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
            <input type="text" placeholder="approxiamte age" name="age">

          </p>

            <p>
              <input type="text" placeholder="approxiamte height" name="height">

            </p>
            <p>
              <textarea  rows="8" cols="80" style="width : 30%;" name="address">Address Spots</textarea>
            </p>
            <p>
              <button type="submit" >save</button>

            </p>

        </form>

      </div>
      <div class="finding_list"  style="width:70%;text-align:center;float:right;;">
        <table>
          <tr>
            <th>age</th>
            <th>height</th>
            <th>address</th>
          </tr>
          <?php
          while ($row = $results-> fetch_assoc()) {

           ?>
           <tr>
             <td><?php echo $row['age']; ?></td>
             <td><?php echo $row['height']; ?></td>
             <td><?php echo $row['address']; ?></td>
           </tr>
           <?php
         }
         ?>
        </table>

      </div>


    </div>

  </body>
</html>
