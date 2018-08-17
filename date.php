<?php
  
  // date() function expects parameter

  /*
  echo date('d');     // echos Day
  echo date('m');     // echos Month
  echo date('Y');     // echos Year
  echo date('1');     // echos Day of the week

  echo date('Y/m/d');  // echos Format
  echo date('m-d-Y');  // echos Format

  echo date('h');     // Hour
  echo date('i');     // Min
  echo date('s');     // Sec
  echo date('a');      // AM or PM
  */
  
  // Set time Zone

  date_default_timezone_set('America/New_York');

  // echo date('h:i:sa');

  #UNIX timestamp: number of seconds that have passed since Jan 1 1970 00:00:00
  // Format arguments; Hour, minute, seconds, month, day, year
  $timestamp = mktime(12, 18, 54, 8, 4, 1990);
  
  // echo $timestamp;   // echos 649786734

  // formats timestamp accordingly
  // echo date('m/d/Y h:i:s', $timestamp);

  $timestamp2 = strtotime('tommorrow');
  $timestamp3 = strtotime('+3 weeks');

  echo date('m/d/Y h:i:s', $timestamp3);

?>