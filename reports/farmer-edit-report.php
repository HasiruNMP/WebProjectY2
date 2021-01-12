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
       <style type="text/css">
  
      
    </style>
  </head>
  <body>

<form action="View my report.php" method="post" >
<input type="text" id="eml" name="eml" placeholder="Enter Your Email"  >
<input type="submit" name="submit" value="View My Report"> 
</form>


<form action="update my report.php" method="post" >
<input id="eml" name="eml"  type="text" placeholder="Enter Your Email" >
<input type="submit" name="submit" value="Update My Report"> 
</form>

<form action="delete my report.php" method="post" >
<input type="text" id="eml" name="eml" placeholder="Enter Your Email">
<input type="submit" name="delete" value="Delete My Report"> 

</form>

  </body>
  </html>
