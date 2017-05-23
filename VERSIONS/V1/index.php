<?php 

// Connection to database
  $connection=mysqli_connect("208.97.173.114","apanemia","milkmilk1","dronewolfpack");
// Check connection
  if (mysqli_connect_errno())
    {
    echo 'NOT_OK';
    //echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

// Increasing the current value with 1
 // mysqli_query($connection,"UPDATE dronewolf_hits SET counter = (counter + 1)
   //   WHERE item='Main Domain'");
      
  /*mysqli_query($connection,"UPDATE dronewolf_hits SET counter = (counter + 1)
      WHERE item='Boardwalk Single'");*/
      
 /*mysqli_query($connection,"UPDATE dronewolf_hits SET counter = (counter + 1)
      WHERE item='TrentU-Radio'");*/
      
  /*mysqli_query($connection,"UPDATE dronewolf_hits SET counter = (counter + 1)
      WHERE item='Uno Mememto'"); */
      
  /*mysqli_query($connection,"UPDATE dronewolf_hits SET counter = (counter + 1)
      WHERE item='modAd'"); */
      
      /*mysqli_query($connection,"UPDATE dronewolf_hits SET counter = (counter + 1)
      WHERE item='Selftitled'"); */
      
//mysqli_query($connection,"UPDATE dronewolf_hits SET counter = (counter + 1)
  //    WHERE item='Launch 1'");
 
  mysqli_close($connection);

	require_once('site.php');

?> 