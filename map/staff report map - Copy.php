

<!DOCTYPE html>
<html>
  <head>
    <title>Marker Animations</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWH-XTux9pCrmqDoV6YM63Ex8FPrAQNLU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
    
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%; width:70%;
        float:right;
        
      }

      #leftpanel{
       
        
        
      }

      #reportphoto{
      	height:200px;width:300px;
      }
      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      table{
   margin-left: auto;
  margin-right: auto;
  width:90%;
   border: 1px solid black;
 
}

th,td{
	
	text-align:left;
	
} 
  
  
      
    </style>
    <script>
     


    </script>
  </head>
  <body>

    <div id ="leftpanel"> 

    
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

$result = mysqli_query($conn,"SELECT * FROM reports");
?>





    	<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table border="1">
  <tr><th> Report ID </th><th> Crop Name </th><th> Crop Type </th><th> Description </th>	<th> Name </th>	<th> Email</th><th> Location</th><th> Photo1 </th><th> Photo3 </th><th> Photo1 </th></tr>	
<?php

while($row = mysqli_fetch_array($result)) {
?>

			
    		<tr><td ><?php echo $row["report_id"]; ?> </td><td><b id="submit"><?php echo $row["crop_name"]; ?> </b></td> <td><?php echo $row["crop_type"]; ?></td>
  			<td><?php echo $row["description"]; ?> </td><td><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></td>
    		<td><?php echo $row["email"]; ?></td><td><?php echo $row["lat"]; ?> <?php echo $row["longt"]; ?></td>
    		<td><img id="reportphoto1" src="images\<?php echo $row["photo1"]; ?>"></td>
        <td><img id="reportphoto2" src="images\<?php echo $row["photo2"]; ?>"></td>
        <td><img id="reportphoto3" src="images\<?php echo $row["photo3"]; ?>"></td></tr>


  			



<?php
}
?>
</table>

 <?php
}
else{
    echo "No result found";
}
?>

    </div>
    <div id="map"></div>
  </body>
</html>


