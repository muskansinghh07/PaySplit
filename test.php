<?php
$servername = "localhost";
$username = "paysplitdata";
$password = "mohan1234";
$dbname = "paysplitdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>