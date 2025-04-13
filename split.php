<?php
$person = isset($_GET['person']) ? $_GET['person'] : '';

$amount = 0;
$perPerson = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['people'])) {
    $people = (int)$_POST['people'];

    $conn = new mysqli("localhost", "paysplitdata", "mohan1234", "paySplitdata");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT SUM(amount) AS total FROM expenses WHERE person = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $person);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    $amount = $data['total'] ?? 0;
    $perPerson = $people > 0 ? $amount / $people : 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Split Expense - PaySplit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 80px auto;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0,0,0,0.05);
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        input[type="number"] {
            padding: 10px;
            width: 80%;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #198754;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #157347;
        }

        .result {
            margin-top: 30px;
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 8px;
        }

        a.back {
            display: inline-block;
            margin-top: 20px;
            color: #198754;
            text-decoration: none;
        }

        a.back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Split for <strong><?php echo htmlspecialchars($person); ?></strong></h2>

        <form method="POST">
            <label>Enter number of people:</label>
            <input type="number" name="people" min="1" required>
            <br>
            <button type="submit">Calculate</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <div class="result">
                <h3>Total Spent: ₹<?php echo $amount; ?></h3>
                <h2>Each person should pay: <strong>₹<?php echo round($perPerson, 2); ?></strong></h2>
            </div>
        <?php } ?>

        <a class="back" href="Total_expense.php">← Back to Total Expense</a>
    </div>
</body>
</html>
