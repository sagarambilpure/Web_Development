<?php
  session_start();

  session_destroy();
  header('Location: /fndfrancis/login.php');
?>
