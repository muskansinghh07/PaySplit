<?php
$servername = "localhost";
$username = "paysplitdata";
$password = "mohan1234";
$dbname = "paysplitdata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$person = $_POST['person'];
$amount = $_POST['amount'];
$reason = $_POST['reason'];

$sql = "INSERT INTO expenses (person, amount, reason) VALUES ('$person', '$amount', '$reason')";

if ($conn->query($sql) === TRUE) {
    echo "Expense added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
