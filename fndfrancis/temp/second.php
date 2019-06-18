<?php
  $x = 9;

  function xyz(){
    var_dump($x); //this will not work bcoz global variables cannot be accessed inside function

    $y = 8;
    var_dump($y);
  }

  xyz();

  var_dump($x);
  var_dump($y); //this will not work bcoz from inside a function cannot be accessed outside

?>
