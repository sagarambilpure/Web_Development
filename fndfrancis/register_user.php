<?php
  $username = $_POST['username'];
  $source = $_FILES['profilePic']['tmp_name'];
  $name = $_FILES['profilePic']['name'];
  $dest_path ='D:/Sagar/Web_Prog/fndfrancis_images/'.$username.'_'.$name;

  if(!move_uploaded_file($source,$dest_path)){
    die("upload failure");
  }
  $password = $_POST['password'];
  $gender  = $_POST['gender'];
  $country = $_POST['country'];

  require 'includes/dbconnect.php';
  if ($conn -> connect_error){
    die($conn -> connect_error);
    // DIE FUNCTION EXITS FROM PHP SCRIPT SENDS MESSAGE TO BROWSER AND FURTHER CODE IS NOT EXECUTED
  } else {
    $query = "insert into users (username,password,country,gender,profile_pic_path) values('$username', '$password', '$country', '$gender','$dest_path')";
    if ($conn ->query($query)) {
      header('Location: /fndfrancis/login.php?valid=1');
    } else {
      echo('Regestration failed '. $conn -> error);
    }
  }
?>
<!--
<!doctype html>
<html>
 <head>
  <meta charset=utf-8>
  <title></title>
 </head>
 <body><br>
  Username : <?php echo($username) ; ?><br>
  Password : <?php echo($password) ; ?><br>
  Gender : <?php echo($gender) ; ?><br>
  Country : <?php echo($country) ; ?><br>
 </body>
</html>
*/
-->
