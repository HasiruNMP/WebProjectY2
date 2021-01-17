<!DOCTYPE html >
<html>
<head>
<title>Login - Farmer</title>

<link rel="icon" href="../../img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<nav class="grey darken-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Reports</a></li>
        <li><a href="badges.html">Graphs</a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../../portal.php" class="waves-effect green waves-light btn">Login Portal<i class="material-icons  right">account_circle</i></a></li>
    </ul>
    </div>
</nav>
<div class="container" style="width: 400px; text-align: center;">
<br><br><br><br><br><br>
    <form id="login-form" method="post" action="#" >
        <h4 id="l1" class="center-align">Login for WebMaster</h4>
 
            <br><br><br>
            <input type="text" name="email" id="user_id" placeholder="Username">    
            <br><br><br>
            <input type="password" name="password" id="user_pass" placeholder="Password"></input>    
            <br><br><br><br><br>
            <input type="submit" class="center-align btn green" name="submit" class="submit" value="login" id="sub">

        
    </form>

    

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

$sql = "SELECT `username`, `password` FROM `webmaster` WHERE `username` = '$email' AND `password` = '$password';";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
//echo $row['email'];
//echo $row['password'];
$ses_email = $row['username'];
$ses_password = $row['password'];
}

//echo $ses_email;
//echo $ses_password;

if ($email = $ses_email && $password = $ses_password)
{
   $_SESSION['wmemail'] = $ses_email;
   $_SESSION['wmpassword'] = $ses_password;
   echo 'You have entered valid username and password';
   header("Location:web-master.php");
}
else
{
   echo '<script type="text/javascript">alert("You have entered an invalid username or password");</script>';
}
}
?>
</div>
</body>
</html>
