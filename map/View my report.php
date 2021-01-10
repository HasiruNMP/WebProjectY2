<!DOCTYPE html>
<html>
  <head>
    <title>My Report View</title>
       <style type="text/css">



 .reportphoto
  {
        height:100px;width:100px;
   }
      table 
      {
        width: 50%;
         margin-left: auto;
       margin-right: auto;
    }


  
  
      
    </style>
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


?>

  


<?php


$email = $_POST["eml"];

$result = mysqli_query($conn,"SELECT * FROM reports where email='$email'");
?>




<div>
  <table border="1">
  	<tr><th> Report ID </th><th> Crop Name </th><th> Crop Type </th><th> Description </th>	<th> Name </th>	<th> Email</th><th> Location</th><th> Photo1</th><th> Photo2</th><th> Photo3</th></tr>	
  
<?php

$row = mysqli_fetch_array($result);
?>


    		<tr><td id="<?php echo $row["report_id"]; ?>" onclick="initMap(<?php echo $row['lat']; ?>,<?php echo $row['longt']; ?>)"><?php echo $row["report_id"]; ?> </td><td><b id="submit"><?php echo $row["crop_name"]; ?> </b></td> <td><?php echo $row["crop_type"]; ?></td>
  			<td><?php echo $row["description"]; ?> </td><td><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></td>
    		<td><?php echo $row["email"]; ?></td><td><?php echo $row["lat"]; ?>,<?php echo $row["longt"]; ?></td>
    		<td><img class="reportphoto" src="images\<?php echo $row["photo1"]; ?>"></td>
    		<td><img class="reportphoto" src="images\<?php echo $row["photo2"]; ?>"></td>
    		<td><img class="reportphoto" src="images\<?php echo $row["photo3"]; ?>"></td></tr>


    	<input id="lat"  type="hidden" value="<?php echo $row["lat"]; ?>" />
    	<input id="lng" type="hidden" value="<?php echo $row["longt"]; ?>" />


  </table>
</div>
</body>
</html>