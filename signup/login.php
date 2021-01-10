<!DOCTYPE html >
<html>
<head>
<title>Login - Farmer</title>


</head>
<body>

    <form id="login-form" method="post" action="#" ><center>
        <img src="../images/logo1.png" class="avatar">
        <p id="l1">Cultivation Report Platform</p>
        <table>

            <tr>
                <td><p align="left" id="sid">Email</p>
                    <input type="text" name="studentid" id="user_id" placeholder="                Email"></td>

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
$dbname = "nsbmtshirts";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
   die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if (isset($_POST["studentid"]) AND isset($_POST["password"])) {
$stuid= $_POST['studentid'];
$password= $_POST['password'];

$sql = "SELECT * FROM `students` WHERE `stuid` = '$stuid' AND `password` = '$password';";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
//echo $row['stuid'];
//echo $row['password'];
$stuid2 = $row['stuid'];
$password2 = $row['password'];
}

//echo $stuid2;
//echo $password2;

if ($stuid = $stuid2 && $pass = $password2)
{
   $_SESSION['stuid'] = $stuid2;
   $_SESSION['password'] = $password2;

   echo 'You have entered valid username and password';
   header("Location: ../index.php");
}
else
{
   echo '<script type="text/javascript">alert("You have entered an invalid username and/or password");</script>';
}
}
?>
</center>

</body>
</html>
