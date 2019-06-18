<?php
  class Student {
    function Student($name, $roll, $gender) {
      #has a hidden parameter passed $this
      $this -> name = $name;
      $this -> roll = $roll;
      $this -> gender = $gender;
    }

    function get_details() {
      #has a hidden parameter passed $this
      return '<br>Name : '.$this -> name . '<br>Gender : ' . $this -> gender;
    }
  }

  $s1 = new Student('mehul', 10, 'm');
  echo($s1 -> get_details());
/* $s1 -> name = 'mehul';
  $s1 -> roll = 10;
  $s1 -> gender = "m";
*/

  $s2 = new Student('jane', 11, 'f');
  echo($s2 -> get_details());
/*  $s2 -> name = 'jane';
  $s2 -> roll = 11;
  $s2 -> gender = "f"; */


  // var_dump($s1);
  // var_dump($s2);

?>
