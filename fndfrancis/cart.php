<?php
$hoodie = $_POST['hoodies'];
$shoes = $_COOKIE['shoes'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Your Cart</title>
    <link rel="stylesheet" href="/fndfrancis/css/app.css">
  </head>
  <body>
    <img src="/fndfrancis/images/dead_pool_yo.jpeg" alt="">
    <div class="cart">
      <table>
        <tbody>
          <tr>
            <td>Shoe</td>
            <td>
              <?php echo($shoes); ?>
            </td>
          </tr>
          <tr>
            <td>Hoodie</td>
            <td>
              <?php echo($hoodie); ?>
            </td>
          </tr>

    </div>
  </body>
</html>
