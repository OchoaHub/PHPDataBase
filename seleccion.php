<html>
<body>
<?php
  // Datos de la tabla
  $servername = "localhost";
  $username = "id9787747_admin";
  $password = "!NPJ8jVdhssy%lr6GMkr";
  $dbname = "id9787747_example";

  //Creas la conexion
  $conn = new mysqli($servername, $username, $password, $dbname);
  //Checar la conexion
  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, name, email FROM ingenieros";
  $result = $conn->query($sql);

  echo "<table border='1'>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Email</th>
  </tr>";

  while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";

  $conn->close();

  // if($result->num_rows > 0)
  // {
  //   // Imprimes lo de cada columna
  //   while($row = $result->fetch_assoc())
  //   {
  //     echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
  //   }
  // }
  // else
  // {
  //   echo "0 results";
  // }
  // $conn->close();
  ?>
