<?php
session_start();
if ( isset( $_SESSION['fpassword'] ) ) 
{}
else 
{
	//$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
	header("Location: ../index.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<nav class="grey darken-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">My Reports</a></li>
        <li><a href="badges.html">Add New Report</a></li>
        <li><a href="badges.html">Messages</a></li>
        <li><a href="badges.html">Graphs</a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn">Log Out<i class="material-icons  right">account_circle</i></a></li>
    </ul>
    </div>
</nav>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dD4aW06XoB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
	 echo "Server Not connected";
}
else
{
	//echo "Server connected";
}

if(!mysqli_select_db($conn,$dbname))
{
	echo "Database Not Selected";
}

else
{
	//echo "Database Selected";
}

$email=$_POST["eml"];

if(isset($_REQUEST["delete"]))
{


$sql="DELETE FROM reports WHERE email='$email'";
}

 if(!mysqli_query($conn,$sql))
 {
 	echo "Not Deleted";
 }
 else
 	echo "Record Deleted Successfully!";
?>

	
</body>
</html>

