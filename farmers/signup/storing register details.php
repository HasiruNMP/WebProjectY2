<html>
<head>
<link rel="icon" href="../../img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
	<nav class="grey darken-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="../../index.php">Welcome</a></li>
        <li><a href="../../public/reports.php">Reports</a></li>
        <li><a href="../../public/graphs.php">Graphs</a></li>
    </ul>
    <ul id="nav-mobile" class="right hide-on-med-and-down">

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



if(isset($_REQUEST["submit"]))
{


$sql="INSERT INTO farmers (email, fname, lname, gender, adline1, adline2, city, province, nic, password, phone, imgpath) VALUES ('$email', '$firstname', '$lastname', '$gd', '$line1', '$line2', '$city', '$province', '$nic','$cm_psw', '$telno', '$img');";
}

 if(!mysqli_query($conn,$sql))
 {
 	echo "Not Inserted";
 }
 else
	echo "<center><h2>Registration Succesfull!</h2><br><h3>We will take you to the Login page now..</h3></center>";
	header( "refresh:2;url=../login/login-farmers.php" );



?>

</body>
</html>