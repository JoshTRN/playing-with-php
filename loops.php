<?php
  # LOOPS - Code block which executes a set number of times

  /*
    Types:
      - For
      - While
      - Do..While
      - Foreach
  */

  # For loop example:
  /*
    for ($i = 0; $i < 10; $i++) {
      echo "Number $i <br>";
    };
  */

  # While Loop example:
  /*
    $i = 0;

    while($i < 10) {
      echo "Number $i <br>";
      $i++;
    ?
  */

  # do...while  
    // Always runs at least onces

    /*
      

        $i = 0;

        do{
          echo "Number $i <br>";
          $i++
        }

        while($i < 10);
    */

    # foreach loops
        // Meant for work with arrays


        // Indexed example
          /*
            $people = ['Brad', 'Jim', 'Dave'];

            foreach($people as $person) {
              echo $person . '<br>'
            }
          */

        // Associative example:
            
              $people = ['Brad' => 'brad@gmail.com', 'Cindy' => "cindy@gmail.com", 'Dave' => "dave@gmail.com"];

              foreach($people as $person => $email) {
              echo $person . ' ' . $email . '<br>';
            }
          
          

?>