<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      #variables
      $name = 'mehul chopra';
      $age = 31;
      $pi = 3.14;
      $lights_on = true;

      var_dump($name);
      var_dump($age);
      var_dump($pi);
      var_dump($lights_on);
    ?>
    <br>
    <?php

      #function
      function perimiter($length,$breadth = 2)
      {
        return 2*($length+$breadth);
      }

      $p = perimiter(6,3);
    ?>
    The Perimiter is <?php echo($p); ?>
    <br>
    Perimiter of another rectange of fixed breadth 2 is <?php echo(perimiter(5)); ?>

  </body>
</html>
