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
        <li><a href="farmer-view-reports.php">My Reports</a></li>
        <li><a href="farmer-add-report.php">Add New Report</a></li>
        <li><a href="../farmers/dm/farmer.php">Messages</a></li>
        <li><a href="../public/graphs-public.php">Graphs</a></li>
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


$sql="UPDATE reports SET quality='".$quality."',bought='".$quality."' where report_id='$reportid'";
}

 if(!mysqli_query($conn,$sql))
 {

  echo "Not Updated";
 }
 else
  echo "Record Updated Successfully!";



?>
</body>
</html>