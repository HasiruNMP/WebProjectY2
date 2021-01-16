<!DOCTYPE html >
<html>
<head>
<title>Login</title>


</head>
<body>

    <form id="login-form" method="post" action="#" >
        <p id="l1">Cultivation Report Platform</p>
        <table>

            <tr>
                <td><p align="left" id="sid">username</p>
                    <input type="text" name="username" id="user_id" placeholder="                username"></td>

            </tr>

            <tr>
                <td><p align="left" id="sid">Password</p>
                    <input type="password" name="password" id="user_pass" placeholder="                  Password"></input></td>
            </tr>

            <tr>
                <input type="submit" name="submit" class="submit" value="login" id="sub">
            </tr>

        </table>
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

if (isset($_POST["username"]) AND isset($_POST["password"])) {
$username= $_POST['username'];
$password= $_POST['password'];

$sql = "SELECT `username`, `password` FROM `staff` WHERE `username` = '$username' AND `password` = '$password';";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
//echo $row['username'];
//echo $row['password'];
$ses_username = $row['username'];
$ses_password = $row['password'];
}

//echo $ses_username;
//echo $ses_password;

if ($username = $ses_username && $password = $ses_password)
{
   $_SESSION['susername'] = $ses_username;
   $_SESSION['spassword'] = $ses_password;
   echo 'You have entered valid username and password';
   header("Location: ../reports/staff-view-reports.php");
}
else
{
   echo '<script type="text/javascript">alert("You have entered an invalid username or password");</script>';
}
}
?>

</body>
</html>
