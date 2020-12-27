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




$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$cropname = $_POST["cropnme"];
$croptype = $_POST["cropt"];
$quantity = $_POST["qunt"];
$descrip = $_POST["desc"];
$latitude = $_POST["lati"];
$longitude = $_POST["longi"];
$img=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img);

echo  "<br>" . $firstname . "<br>". $lastname . "<br>" . $email . "<br>" . $cropname . "<br>". $croptype . "<br>" . $quantity ."<br>" . $descrip .  "<br>"  . $latitude . "<br>"   . $longitude . "<br>". $img . "<br>";


if(isset($_REQUEST["submit"]))
{


$sql="INSERT INTO reports (email, fname, lname, crop_name, crop_type, photos, lat, longt, description) VALUES ('$email', '$firstname', '$lastname', '$cropname', '$croptype', '$img', '$latitude', '$longitude', '$descrip');";
}

 if(!mysqli_query($conn,$sql))
 {
 	echo "Not Inserted";
 }
 else
 	echo "Inserted";



?>



