<?php
$cars = array('i20','mercedes','audi');
  /* var_dump($cars);

  echo ('<br>' . $cars[0]);
  echo ("<br> $cars[2]"); // no String Concatenation required

  $cars[2]="Audi";

  echo ('<br>');
  var_dump($cars);

  echo ('<br>' . count($cars));*/

  #associative array
  $students = array(11 => 'mehul' , 45 => "jane" , 56 => 'rahul');
  echo($students[45] .'<br>');
  $students[45] = 'Jill';

  #var_dump($students);

  foreach ($students as $key => $value) {
    echo($key. " ");
    echo($value. '<br>');
  }
?>
<!doctype html>
<html>
  <head>
    <meta charset=utf-8>
    <title></title>
  </head>
  <body><br>
    <b>Cars i have : </b><br>
    <ul id="cars_list">
      <?php
        foreach ($cars as $car) {
      ?>
      <li><?php echo($car); ?></li>
      <?php
        }
      ?>
    </ul>
    <table border="1">
    <thead>
      <tr>
        <th>Name</th>
        <th>Roll</th>
      </tr>
    </thead>
      <?php foreach ($students as $roll => $name) {
      ?>
      <tr>
        <td><?php echo($roll)?></td>
        <td><?php echo($name)?></td>
      </tr>
      <?php
        }
      ?>
    </table>
  </body>
</html>
