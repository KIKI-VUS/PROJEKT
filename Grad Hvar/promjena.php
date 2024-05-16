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

$sql = "UPDATE gosti SET Dolazak='$Dolazak', Odlazak='$Odlazak' WHERE Naziv='$Naziv'"; // Promijenjeni nazivi kolona

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>