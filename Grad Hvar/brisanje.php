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
$Naziv = $_POST["Ime"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM gosti WHERE Naziv='$Naziv'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 
</html>