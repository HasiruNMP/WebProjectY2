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


	<link rel="icon" href="../../img/logo.png">
    <title>Delete Report</title>
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src= 
        "https://code.jquery.com/jquery-2.1.1.min.js"> 
    </script> 
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWH-XTux9pCrmqDoV6YM63Ex8FPrAQNLU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>

</head>
<body>
<nav class="grey darken-3">
  <div class="nav-wrapper">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="farmer-view-reports.php">My Reports</a></li>
        <li><a href="farmer-add-report.php">Add New Report</a></li>
        <li><a href="../dm/messages.php">Messages</a></li>
        <li><a href="all-reports.php">All Reports</a></li>
        <li><a href="../graphs/graphs.php">Graphs</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href = "../login/logout.php" class="waves-effect waves-light btn grey">Log out <i class="material-icons  right">account_circle</i></a></li>
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

$rid=$_POST["rid2"];

if(isset($_REQUEST["delete"]))
{


$sql="DELETE FROM reports WHERE report_id='$rid'";
}

 if(!mysqli_query($conn,$sql))
 {
 	echo "Not Deleted";
 }
 else
 	echo "<div class='container'><h4 class='center-align'>Report Deleted Succesfully</h4></div>";
?>

	
</body>
</html>

