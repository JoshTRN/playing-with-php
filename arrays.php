<?php

  # Array - Variable that holds multiple values
  /*
    - Indexed
    - Associative
    - Multi-Dimensional
  */

  // Indexed

  $people = array('Kevin', 'Jeremy', 'Sarah');
  $ids = array(23, 55, 12);
  $cars =['Honda', 'Toyota', 'Ford'];
  $cars[3] = 'Chevy';
  $cars[] = 'BMW';

  // echo '<h1>' . count($cars) .'</h1>' . '<br>';
  // print_r($cars);

  // var_dump tells you array size and each index
  // var_dump($cars);

  // Associative arrays

  $people = array('Brad' => 35, 'Jose' => 32, "William" => 37);

  $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];


  //Multi-Dimensional Array
    # Arrays within arrays
 $cars =  array(
    array('Honda', 20, 10),
    array('Toyota', 50, 20),
    array('Ford', 30, 13)
 );

  var_dump($cars[0]);

?>