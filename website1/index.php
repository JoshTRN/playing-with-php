<?php
/*

  - include continues to run script even if included file does not exist
  - require stops script if required file does not exist
  - require_once checks to see if already required. If required, doesn't render again.

*/

include 'inc/header.php';?>

  <h1>Home</h1>

<?php include 'inc/footer.php';?>