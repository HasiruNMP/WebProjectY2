<!DOCTYPE html >
<html>
<head>
    <link rel="icon" href="../../img/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <style>

    </style>
</head>

<body>

<div class="row">

    <div class="col s8" id="img">
        <!-- <img src="../../img/loginpage.jpg" class="cover"> -->
    </div>

<form action="#" method="post">
    <div class="col s4 card logincontx">
        <div class="" id="logindiv">
            <div class="row">
                <div class="col s2"></div>
                <div class="input-field col s8">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_prefix" type="text" name="email" class="validate">
                    <label for="icon_prefix">Email</label>
                </div>
                <div class="col s2"></div>
            </div>
            <div class="row">
                <div class="col s2"></div>
                <div class="input-field col s8">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_prefix" type="password" name="password" class="validate">
                    <label for="icon_prefix">Password</label>
                </div>
                <div class="col s2"></div>
            </div>
            <div class="row">
                <div class="col s2"></div>
                <div class=" col s8">
                    <input type="submit" value="Submit">
                </div>
                <div class="col s2"></div>
            </div>
        </div>
    </div>
</div>





<?php
ob_start();
session_start();

//error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dd4aw06xob";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if (isset($_POST["email"]) AND isset($_POST["password"])) {
$email= $_POST['email'];
$password= $_POST['password'];

$sql = "SELECT `email`, `password` FROM `farmers` WHERE `email` = '$email' AND `password` = '$password';";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
//echo $row['email'];
//echo $row['password'];
$ses_email = $row['email'];
$ses_password = $row['password'];
}

//echo $ses_email;
//echo $ses_password;

if ($email = $ses_email && $password = $ses_password)
{
   $_SESSION['femail'] = $ses_email;
   $_SESSION['fpassword'] = $ses_password;
   echo 'You have entered valid email and password';
   header("Location: ../reports/farmer-view-reports.php");
}
else
{
   echo '<script type="text/javascript">alert("You have entered an invalid email or password");</script>';
}
}
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
