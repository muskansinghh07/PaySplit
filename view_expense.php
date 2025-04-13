<!DOCTYPE html>
<html>
<head>
    <title>View Expenses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f9fc;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            display: block;
            width: fit-content;
            margin: 0 auto;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>All Expenses</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Reason</th>
            <th>Added On</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "paysplitdata";
        $password = "mohan1234";
        $dbname = "paysplitdata";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT person, amount, reason, created_at FROM expenses ORDER BY created_at DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["person"]) . "</td>
                        <td>₹" . number_format($row["amount"], 2) . "</td>
                        <td>" . htmlspecialchars($row["reason"]) . "</td>
                        <td>" . $row["created_at"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No expenses found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>

    <a href="add_expense.php">+ Add New Expense</a>
</body>
</html>
