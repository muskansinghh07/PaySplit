<!DOCTYPE html>
<html>
<head>
    <title>About Us - PaySplit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #198754;
            padding: 15px 30px;
            color: white;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .team-member {
            margin: 30px 0;
        }

        .team-member h3 {
            color: #198754;
            margin-bottom: 5px;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div><strong>PaySplit</strong></div>
        <div>
            <a href="index.php">Home</a>
            <a href="add_expense.php">Add Expense</a>
            <a href="view_expense.php">View</a>
            <a href="Total_expense.php">Total</a>
            <a href="about.php">About Us</a>
        </div>
    </div>

    <div class="container">
        <h2>Meet the Elite Trio</h2>

        <div class="team-member">
            <h3>Mohan Gupta</h3>
            <p>A passionate web developer and core team member of Elite Trio. Mohan brings strong problem-solving skills, backend experience, and an innovative approach to real-world applications like PaySplit.</p>
        </div>

        <div class="team-member">
            <h3>Muskan Kumari</h3>
            <p>Creative mind behind our user interfaces, Muskan ensures each part of PaySplit is intuitive, aesthetic, and user-friendly. Her attention to detail and love for design drives the front-end experience.</p>
        </div>

        <div class="team-member">
            <h3>Priya Kumari</h3>
            <p>A tech enthusiast who bridges both frontend and backend, Priya is driven by a love for learning and building meaningful tech. Her adaptability and teamwork bring harmony to our project.</p>
        </div>

        <p style="margin-top: 40px; font-size: 16px; text-align: center;">
            We are the <strong>Elite Trio</strong>, a group of enthusiastic web developers passionate about building impactful digital tools. Our mission with PaySplit is to simplify group expense sharing with smart and clean technology.
        </p>

        <div class="footer">
            &copy; <?php echo date("Y"); ?> Elite Trio. All rights reserved.
        </div>
    </div>

</body>
</html>
