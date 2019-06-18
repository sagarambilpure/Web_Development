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

$rows = array();
while($row = $results -> fetch_assoc()){
  $rows[] = $row;
}

echo json_encode($rows);
?>
