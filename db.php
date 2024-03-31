<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant"; // Database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $type_massage = $_POST["type_massage"];


    $sql = "INSERT INTO contact (name, email,subject,type_massage) VALUES ('$name', '$email', '$subject', '$type_massage')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
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
    <title>contact</title>
    <link rel="stylesheet" href="db.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>

<body>
    <form action="db.php" method="post">

<div id="contact">
 <h1 id="section">Contact</h1>
 <div id="contact_row">
    <div id="contact_col">
      <div id="address">
     <h4<i class="fa fa-location-arrow" aria-hidden="true"></i>Delhi,Outer distric ,Rohini</h4>
     <div id="gmail">
     <h4<i class="fa fa-envelope" aria-hidden="true"></i>vishal21042005@gmail.com</h4>
     <div id="tel">
     <h4<i class="fa-solid fa-phone"></i>+9958336453</h4>
     <div >
        <h3>Follow Us</h3>
        <div id="fg">
        <div>
            <img id="google" src="contactgoogle.png" >
            <div>
                <img id="facebook" src="contactfacebook.png">
                <div>
                    <img id="instagram" src="contactinstagram.png">
                </div>
            </div>
            </div>
        </div>
     </div>

        </div>
        </div>
        </div>
        </div>
        <div id="contact_coltwo">
        
            <div id="big_box">
           <h4 id="git">Get in touch</h4>
           <div id="name">
           <input type="text" name="name" placeholder="Name">
           <div id="Email" >
            <input type="email" name="email" placeholder="Email">
            <div id="Subject" >
            <input type="text"  name="subject" placeholder="Subject">
            <div id="type_massage">
                <input id="tm" type="text" name="type_massage" placeholder="Type Massage">
                <div id="button_send_massage">
                    <button id="bn">Send Massage</button>
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



































