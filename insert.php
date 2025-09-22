<?php
header("Access-Control-Allow-Origin: *");  //two of these is very important
header("Content-Type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajbo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = " INSERT INTO `products`(`ProductID`, `ProductName`, `SupplierID`, `CategoryID`, `Unit`, `Price`)
VALUES ('9',' herbal teas','01','09','hot drinks','20.00')";

if (mysqli_query($conn, $sql)) {
  echo "Crazy";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>''