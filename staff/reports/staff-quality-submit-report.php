<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="icon" href="../../img/logo.png">
    <title>Submit Status</title>
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
            <li><a href="#"><b>Reports</b></a></li>
            <li><a href="../dm/messages.php">Messages</a></li>
            <li><a href="../graphs/graphs.php">Graphs</a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href = "../staff/login/logout.php" class="waves-effect waves-light btn grey">Log out <i class="material-icons  right">account_circle</i></a></li>
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
  # echo "Server Not connected";
}
else
{
  #echo "Server connected";
}

if(!mysqli_select_db($conn,$dbname))
{
  #echo "Database Not Selected";
}

else
{
  #echo "Database Selected";
}

$reportid= $_POST["rpid"];
$quality = $_POST["quality"];
$decision= $_POST["decision"];

#echo  "<br>" . $reportid . "<br>". $quality . "<br>" . "<br>". $decision . "<br>";


if(isset($_REQUEST["submit"]))
{


$sql="UPDATE reports SET quality='".$quality."',bought='".$decision."' where report_id='$reportid'";
}

 if(!mysqli_query($conn,$sql))
 {

  echo "Not Updated";
 }
 else
 echo "<center><h2>Process Completed</h2><br><h3>Redirecting to Reports...</h3></center>";
 header( "refresh:2;url=staff-view-reports.php" );



?>
</body>
</html>