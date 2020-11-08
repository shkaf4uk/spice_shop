<?php 

// for localhost
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tw2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");

$id = null;
if (isset($_GET["id"])) {
	$id = $_GET["id"];
}
