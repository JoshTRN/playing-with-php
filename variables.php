
<h1><?php

  # PHP
  /*
    - Write php in php tag
    - PHP goes inside html tags
    - If html inside php, put in strings e.g. '<h1>Hello</h1>'
  */

  # VARIABLES 
  /*
    - Prefix wih $_COOKIE-Start with a letter or an underscore
    - Only letters, numbers and underscores
    -Case sensitive
  /*

  # DATA TYPES
  /*
    Strings
    Ints
    Floats
    Bools
    Arrays
    Objects
    NULL
    Resource
  */

   # Constants 
  /*
    - constants use define function.
    - use only if var never changes.
    - popular practice all caps.
 

    e.g. define('GREETING', 'Hello Everyone');
  */

  # Echo and Print
  /*
    - echo returns no value
    - print returns 1
    - print can be used with expressions
    - echo is a little faster
    - echo is normally seen
  */

  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $string1 = 'Hello';
  $string2 = "World";
  // concat with '.' or double quotes and $ signs
  // double quotes parses variables
  $greeting = $string1 . $string2;
  $greeting2 = "$string1 $string2";

  // Backslash for escaping 
  $string3 = 'They\'re Here!';

  $output = 'Hello World';


  echo $output;

?></h1>