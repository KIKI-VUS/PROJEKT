
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apartmani";
$Naziv = $_POST["Naziv"];
$Dolazak = $_POST["Dolazak"]; // Promijenjen naziv varijable
$Odlazak = $_POST["Odlazak"]; // Promijenjen naziv varijable

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO gosti (Naziv, Dolazak, Odlazak) VALUES ('$Naziv', '$Dolazak', '$Odlazak')"; // Promijenjeni nazivi kolona

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>