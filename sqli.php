<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .my-container {
            width: 50%;
            padding: 8%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1><centre>Sql injection Login page</centre></h1>
    <div id = "frm">
        <f1>Login</f1>
        <form name="f1" action ="sqli.php" method= "POST">
            <p>
                <label>Username: </label>
                <input type = "text" id="user" name="user" />
            </p>
            <p>
                <label>Password: </label>
                <input type = "text" id="pass" name="pass" />
            </p>
            <p>
                <input type = "submit" name="submit" id = "btn" value="Login" />
            </p>
        </form>
    </div>
</body>
<?php
if (isset($_POST['submit']))
{
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "sql_demo";

    $con=mysqli_connect($host, $user,$password,$db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ".mysqli_connect_errno());
    }
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from login where username = '$username' and password ='$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0) {
        echo "<h1><center>Login successful </center></h1>";
        echo "Query is : ".$sql;
    }
    else{
        echo "<h1> Login.Failed . Invalid username or password.</h1>";
    }
    if($count>0)
            {
                echo "<div id='GFG'>";
                echo "<table>
                <tr bgcolors='#ccc';
                <th>Username</th>
                <th>Password</th>
                </tr>";
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr align=left style'font-size:18px;'>";
                    echo "<td align=center>" .$row['username'] . "</td>";
                    echo "<td align-left>" . $row['password'] . "</td>";
                    echo "</tr>";

                }
            }
}
?> 