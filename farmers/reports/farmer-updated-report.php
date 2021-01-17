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
<html>
  <head>
    <title>Adding Updated Details</title>
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



$reportid= $_POST["rid"];
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

//echo  "<br>" . $firstname . "<br>". $lastname . "<br>" . $email . "<br>" . $cropname . "<br>". $croptype . "<br>" . $quantity ."<br>" . $descrip .  "<br>"  . $latitude . "<br>"   . $longitude . "<br>". $img . "<br>" . "<br>". $img2 . "<br>" . "<br>". $img3 . "<br>";


if(isset($_REQUEST["submit"]))
{


$sql="UPDATE reports SET email='".$email."',fname='".$firstname."', lname='".$lastname."', crop_name='".$cropname."',  crop_type='".$croptype."', quantity='".$quantity."', photo1='".$img."', photo2='".$img2."', photo3='".$img3."', lat='".$latitude."', longt='".$longitude."', description='".$descrip."' where report_id='$reportid'";
}

 if(!mysqli_query($conn,$sql))
 {

  echo "Not Updated";
 }
 else
 echo "<center><h2>Report Updated</h2><br><h3>Redirecting to Your Reports...</h3></center>";
 header( "refresh:2;url=farmer-view-reports.php" );



?>

<br>
<button onclick="window.location.href='Report View,Update,Delete.php';">
      View Report Details
    </button>



</body>
</html>
