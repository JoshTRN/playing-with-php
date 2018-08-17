<?php 
  # Conditionals

  /*
    Operators:
      =   - Assignment operator
      ==  - Matches value (Equal)
      === - Matches value AND datatype (identical)
      <   - Less than
      >   - Greater than
      <=  - Less than or equal to
      >=  - Greater than or equal to
      <>  - Not equal value
      !=  - Not equal value
      !== - Not equal value nor datatype (not identiacal)

  
    $num = 5;

    // Will pass because 5(int) is equal to '5'(string)
    if($num == '5') {
      echo "$num passed";
    } else {
      echo "$num did not pass";
    }
  */

  # Logical Operators
  /*
    and &&
    or ||
    xor
  */

  # Switch statements
  /*
    - Just like JavaScript
    - Takes an argument and tests for cases
  */

  $name = 'Dave';

  switch($name){
    case 'Josh':
      echo "$name is awesome!";
      break;
    default:
      echo "$name is awesome! but Josh is awesome-er";
  }
?>
