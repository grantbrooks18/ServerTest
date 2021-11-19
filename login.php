<?php
  $servername = 10.0.0.132;
  $username = "grant";
  $password = "fergus1732";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  $sql = "INSERT INTO Login (username, lpassword VALUES ('Peter', 'Parker'))";

  if(mysqli_query($link, $sql)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
  }
  mysqli_close($link);
?>
