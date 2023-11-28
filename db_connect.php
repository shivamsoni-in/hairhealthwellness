<?php

    $conn = new mysqli("localhost","iiijssmy_mahesh","Maheshsurvey@07","iiijssmy_hairhealthandwellness");
    
    // Check connection
    if ($conn -> connect_errno) {
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
    }
    
?>