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
	echo "Server connected";
}

if(!mysqli_select_db($conn,$dbname))
{
	echo "Database Not Selected";
}

else
{
	echo "Database Selected";
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