<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process signup
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];




    $sql = "INSERT INTO signup (email,username,password) VALUES ('$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <form action="signup.php" method="post">
    <div class="box_indent">
    <div id="box">
        <div id="signup">
        <h2 id="signup_title">Sign Up</h2>
        <div id="sub_div">
        <div id="email">
        <h3 id="email first">Email </h3>
        <input type="text" name="email"  placeholder="Enter Email">

        <div id="username">
        <h3 id="username second">Username</h3>
        <input type="username" name="username" placeholder="Enter Username">

        <div id="password">
        <h3 id="password third">Password</h3>
        <input type="password" name="password" placeholder="Password">
    
        <div id="signup button">
        <button id="sp">Sign Up</button>

         <a href="home.html">
         <input type="button" id="home" value="Home">
        </a>
        
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
</form>
</body>
</html>


























































































