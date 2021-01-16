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
    <title>Edit Report</title>
        <link rel="icon" href="../../img/logo.png">
    <title>Reports</title>
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

       <style type="text/css">
  
    </style>
    
<link rel="icon" href="../../img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <li><a href = "../staff/login/logout.php" class="waves-effect waves-light btn grey">Log out <i class="material-icons  right">account_circle</i></a></li>
      </ul>
  </div>
</nav>
<div class="container">

<form action="update my report.php" method="post" >
<input id="eml" name="eml"  type="text" placeholder="Enter Your Report ID" >
<input type="submit" name="submit" value="Update My Report"> 
</form>

<form action="delete my report.php" method="post" >
<input type="text" id="eml" name="eml" placeholder="Enter Your Report ID">
<input type="submit" name="delete" value="Delete My Report"> 
</form>

</div>
</body>
</html>
