<?php
  $link = mysqli_connect(10.0.0.132, "root", "", "demo");

  // Check connection
  if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $sql = "INSERT INTO Security (username, lpassword VALUES ('Peter', 'Parker'))";

  if(mysqli_query($link, $sql)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
  }
  mysqli_close($link);
?>
