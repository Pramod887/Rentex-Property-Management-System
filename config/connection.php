<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentex6";

// $servername = "localhost";
// $username = "u679843602_logistic";
// $password = "Logistic123*";
// $dbname = "u679843602_logisticdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>