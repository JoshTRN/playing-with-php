<?php
  # FUNCTIONS - Blocks of code that can be repeatedly called

  /*
    Camel Case - myFunction();
    Lower Case - my_function();
    Pascal Case - MyFunction(); (often used for classes in OOP);
  */

  // Creates Simple Function
  function simpleFunction() {
    echo 'Hello World<br>';
  }

  // Runs Simple Function();

  // simpleFunction();

  // Arguments need '$'s just like variables
  // '=' sign sets default argument
  function sayHello($name = 'World') {
    echo "Hello $name<br>";
  }
  // sayHello('Josh');
  // sayHello();

  function addNumbers($num1, $num2) {
    return $num1 + $num2;
  }
  
  $myNum = 10;

  function addFive($num) {
    echo $num += 5;
  }

  // passing by reference takes a variable that's already set and modifies that variable

  echo "Value before \"by reference\" function: $myNum<br>";

  function addTen(&$num) {
    $num += 10;
  }
  addTen($myNum);

  echo "Value after \"by reference\" function: $myNum";
?>