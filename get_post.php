<?php

  # $_GET requests are sent directly through the URL

  // Checks if a get request is set
  if(isset($_GET['name'])) {
    // if set, gets the name variable and checks for html entities
   
      $name = htmlentities($_GET['name']);
   
  }
# $_POST requests are NOT sent through URL but through headers
  // if(isset($_POST['name'])) {
  //   // if set, gets the name variable and checks for html entities
  //   $name = htmlentities($_POST['name']);
  //   echo $name;
  // }

  # $_REQUEST rarely used
  // if(isset($_REQUEST['name'])) {
  //   // if set, gets the name variable and checks for html entities
  //   $name = htmlentities($_POST['name']);
  //   echo $name;
  // }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Website</title>
</head>
<body>
    
    <form action="" method="get"> 
      <div>
        <label>Name</label>
        <input type="text" name='name'>
      </div>
      <div>
        <label>Email</label>
        <input type="text" name='email'>
      </div>
      <input type="submit" value='Submit'>
    </form>

  <ul>
    <li><a href="get_post.php?name=Brad">Brad</a></li>
    <li><a href="get_post.php?name=Steve">Steve</a></li>
  </ul>

    <h1><?php echo "$name's Profile"; ?></h1>
</body>
</html>