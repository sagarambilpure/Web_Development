<?php
  $n = 7;
  $i = 0;

  while($i < $n){
    if ($i % 2 == 0) {
      var_dump($i);
    }
    $i++;
  }
  echo("<br>");
  $a=0;
  $b=1;
  $c;
  var_dump($a);
  var_dump($b);
  for ($i=0; $i < $n-2; $i++) {
    $c=$a+$b;
    var_dump($c);
    $a = $b;
    $b = $c;
  }

?>
