<?php
  $servername = "localhost";
  $username = "id9787747_admin";
  $password = "!NPJ8jVdhssy%lr6GMkr";
  $dbname = "id9787747_example";

  // Create connection
  $conn = new mysqli($servername, $username, $password  , $dbname);
  // Check connection
  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO ingenieros (name, email) VALUES ('John', 'john@example.com')";

  if($conn->query($sql) === TRUE)
  {
    echo "New record created successfully";
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>
