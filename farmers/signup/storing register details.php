<html>
<head>
	</head>
	<body>

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
$gd = $_POST["gender"];
$line1 = $_POST["line1"];
$line2 = $_POST["line2"];
$city = $_POST["city"];
$province = $_POST["province"];
$nic = $_POST["nic"];
$telno = $_POST["telnum"];
$email = $_POST["email"];
$cm_psw = $_POST["confirm_password"];
$img=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img);




echo  "<br>" . $firstname . "<br>". $lastname . "<br>" . $gd . "<br>" . $line1 . "<br>". $line2 . "<br>" . $city ."<br>" . $province .  "<br>"  . $nic . "<br>"   . $telno . "<br>". $email . "<br>" . "<br>". $cm_psw . "<br>" . "<br>". $img . "<br>";




if(isset($_REQUEST["submit"]))
{


$sql="INSERT INTO farmers (email, fname, lname, gender, adline1, adline2, city, province, nic, password, phone, imgpath) VALUES ('$email', '$firstname', '$lastname', '$gd', '$line1', '$line2', '$city', '$province', '$nic','$cm_psw', '$telno', '$img');";
}

 if(!mysqli_query($conn,$sql))
 {
 	echo "Not Inserted";
 }
 else
 	echo "Inserted";



?>

</body>
</html>