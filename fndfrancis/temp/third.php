<?php
$x = 100;

if ($x < 0 or $x > 100) {
  echo("I<br>");
}
elseif ($x>80) {
  echo("A<br>");
}
else {
  echo ("F<br>");
}



$ch = "a";

switch ($ch) {
  case 'a':
  case 'e':
  case 'i':
  case 'o':
  case 'u':
    echo("Vowel");
    break;
  default:
    echo("Not Vowel");
    break;
}

?>
