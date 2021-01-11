<!DOCTYPE html>
<html>
  <head>
    <title>Adding Report Details</title>

  </head>
 <body> 
 	<script>

</script>

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
//photo1
$img=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img);
//photo2
$img2=$_FILES['image2']['name'];
$temp_name=$_FILES['image2']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img2);
//photo3
$img3=$_FILES['image3']['name'];
$temp_name=$_FILES['image3']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img3);

echo  "<br>" . $firstname . "<br>". $lastname . "<br>" . $email . "<br>" . $cropname . "<br>". $croptype . "<br>" . $quantity ."<br>" . $descrip .  "<br>"  . $latitude . "<br>"   . $longitude . "<br>". $img . "<br>" . "<br>". $img2 . "<br>" . "<br>". $img3 . "<br>";


if(isset($_REQUEST["submit"]))
{


$sql="INSERT INTO reports (email, fname, lname, crop_name, crop_type, quantity, photo1, photo2, photo3, lat, longt, description) VALUES ('$email', '$firstname', '$lastname', '$cropname', '$croptype', '$quantity', '$img', '$img2', '$img3','$latitude', '$longitude', '$descrip');";
}

 if(!mysqli_query($conn,$sql))
 {
 	echo "Not Inserted";
 }
 else
 	echo "Record Inserted Successfully!";



?>
<br>
<button onclick="window.location.href='Report View,Update,Delete.php';">
      View Report Details
    </button>




</body>
</html>



