<?php
  $shoes = $_POST['shoes'];
  setcookie('shoes',$shoes);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/fndfrancis/css/app.css">
  </head>
  <body>
    <img src="/fndfrancis/images/dead_pool_yo.jpeg" alt="">
    <div class="hoodies-selection">
      <h2>Hoodie</h2>
      <form method="post" action="/fndfrancis/cart.php">
          <button type="submit">Checkout</button>
          <table>
            <tbody>
              <tr>
                <td>
                  <input type="radio" name="hoodies" value="h1">
                </td>
                <td>
                  <img class="hoodie_img" src="/fndfrancis/images/dead_pool_hoodie1.jpeg" alt="">
                </td>
              </tr>
              <tr>
                <td>
                  <input type="radio" name="hoodies" value="h2">
                </td>
                <td>
                  <img class="hoodie_img" src="/fndfrancis/images/dead_pool_hoodie2.jpeg" alt="">
                </td>
              </tr>
              <tr>
                <td>
                  <input type="radio" name="hoodies" value="h3">
                </td>
                <td>
                  <img class="hoodie_img" src="/fndfrancis/images/dead_pool_hoodie3.jpeg" alt="">
                </td>
              </tr>
            </tbody>
          </table>
      </form>
    </div>
  </body>
</html>
