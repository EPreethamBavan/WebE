<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Labs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .lab-link {
            display: inline-block;
            margin: 10px;
            padding: 15px 25px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .lab-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Security Labs</h1>
        <p>Welcome to the Security Labs. Please choose a lab:</p>
        <a href="index.php" class="lab-link">XSS Lab</a>
        <a href="sqli.php" class="lab-link">SQL Injection Lab</a>
    </div>
</body>
</html>
