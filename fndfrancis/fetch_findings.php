<?php
session_start();
$userid = $_SESSION['userid'];

require "includes/dbconnect.php";

if($conn -> connect_error){
  die($conn -> connect_error);
}else{
  $query = "select * from findings where user_id = $userid";
  $results = $conn->query($query);
}

?>

<table>
  <tr>
    <th>age</th>
    <th>height</th>
    <th>address</th>
  </tr>
  <?php
  sleep(10); //dummy to time consuming operation
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
