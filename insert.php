<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajbo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = " INSERT INTO `products`(`ProductID` , `ProductName`, `SupplierID`, `CategoryID`, `Unit`, `Price`)
VALUES ('14',' Milk','01','09','hot drinks','20.00')";

if ($conn->query($sql) === TRUE) {
  echo "Record inserted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
