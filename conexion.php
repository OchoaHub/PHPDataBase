<?php
  $servername = "localhost";
  $username = "id9787747_admin";
  $password = "!NPJ8jVdhssy%lr6GMkr";

  // Create connection

  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>
