<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tw";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = null;
if (isset($_GET["id"])) {
	$id = $_GET["id"];
}


$conn->set_charset("utf8");
	$products = "SELECT * FROM products";
    $resultat = $conn -> query($products);
    $row = mysqli_fetch_assoc($resultat);

?>