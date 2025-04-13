<?php
$servername = "localhost";
$username = "paysplitdata";
$password = "mohan1234";
$database = "paysplitdata";//db name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Run the SQL query
$sql = "SELECT person, SUM(amount) AS total FROM expenses GROUP BY person";
$result = $conn->query($sql);

// Check for SQL errors
if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Total Expenses</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            padding: 40px;
        }
        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 20px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Total Expense Summary</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Total Expense</th>
    </tr>

    <?php
    // Display the results
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td><a href='split.php?person=" . urlencode($row["person"]) . "'>" . htmlspecialchars($row["person"]) . "</a></td><td>₹" . $row["total"] . "</td></tr>";

        }
    } else {
        echo "<tr><td colspan='2'>No data found</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
