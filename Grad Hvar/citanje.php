<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta charset="utf-8">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apartmani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Naziv, Od, Do FROM gosti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Naziv: " . $row["Naziv"]. "<br>Datum: " . $row["Od"]. " - " . $row["Do"]. "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
</html>