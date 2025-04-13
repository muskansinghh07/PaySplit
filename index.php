<!DOCTYPE html>
<html>
<head>
    <title>PaySplit - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f8e071, #ffd86b);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #2c3e50;
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
        }

        .navbar ul li {
            margin-left: 20px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .navbar ul li a:hover {
            color: #f8c84b;
        }

        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url('the.jpg');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 40px 20px;
        }

        .main h2 {
            font-size: 36px;
            color: #2c3e50;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.8);
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            font-size: 18px;
            background-color: #27ae60;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h1>PaySplit</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add_expense.php">Add Expense</a></li>
            <li><a href="view_expense.php">View Expense</a></li>
            <li><a href="Total_expense.php">Total Expense</a></li>
            <li><a href="split.php">Split Expense</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="About.php">About Us</a></li>
            
        </ul>
    </div>

    <div class="main">
        <h2>Welcome to PaySplit - Smart Way to Track Shared Expenses</h2>
        <a href="add_expense.php" class="btn">Add an Expense</a>
    </div>

</body>
</html>
