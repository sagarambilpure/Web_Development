<?php
session_start();
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];

require "includes/dbconnect.php";

$age = $_POST['age'];
$height = $_POST['height'];
$address = $_POST['address'];


if($conn -> connect_error){
  die($conn -> connect_error);
}else{

$query = "insert into findings(age,height,address,user_id) values($age,$height,'$address',$userid)";

$results = $conn -> query($query);
  if($results){
    header('Location: /fndfrancis/view_finding.php');
  }
  die('could not save finding');
}
 ?>
