<!DOCTYPE html >
<html>
<head>
<title>Login - Farmer</title>


</head>
<body>

    <form id="login-form" method="post" action="#" >
        <img src="../images/logo1.png" class="avatar">
        <p id="l1">Cultivation Report Platform</p>
        <table>

            <tr>
                <td><p align="left" id="sid">Email</p>
                    <input type="text" name="email" id="user_id" placeholder="                Email"></td>

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
    <a href="login-staff.php"><button type="button">Login for Staff </button> </a>
    

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
   $_SESSION['email'] = $ses_email;
   $_SESSION['password'] = $ses_password;
   echo 'You have entered valid username and password';
   header("Location: ../index.php");
}
else
{
   echo '<script type="text/javascript">alert("You have entered an invalid username or password");</script>';
}
}
?>

</body>
</html>
