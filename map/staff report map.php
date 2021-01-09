

<!DOCTYPE html>
<html>
  <head>
    <title>Marker Animations</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWH-XTux9pCrmqDoV6YM63Ex8FPrAQNLU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%; width:50%;
        float:right;
        
      }


      #leftpanel{
        height:80%;width:49%;
        background-color: lightblue;
        float:left;
      }

      #reportphoto{
      	height:100px;width:100px;
      }
      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      table {
  width: 100%;
}


  
  
      
    </style>
    <script>
      // The following example creates a marker in Stockholm, Sweden using a DROP
      // animation. Clicking on the marker will toggle the animation between a BOUNCE
      // animation and no animation.
    function initMap(rlan,rlng) {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: {
      lat: 7.8742,
      lng: 80.6511
    },
    mapTypeId: 'roadmap'
  });



  //google.maps.event.addDomListener(document.getElementById(rid), 'click', function(evt) {
    var marker = new google.maps.Marker({

      position: {
        lat: parseFloat(rlan),
        lng: parseFloat(rlng)
      },
      map: map
    });
  //});
    marker.setMap(map);


google.maps.event.addDomListener(window, 'load', initMap);
          
       
}





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
  <table border="0">
  	<tr><th> Report ID </th><th> Crop Name </th><th> Crop Type </th><th> Description </th>	<th> Name </th>	<th> Email</th><th> Location</th><th> Photo</th></tr>	
  
<?php

while($row = mysqli_fetch_array($result)) {
?>


    		<tr><td id="<?php echo $row["report_id"]; ?>" onclick="initMap(<?php echo $row['lat']; ?>,<?php echo $row['longt']; ?>)"><?php echo $row["report_id"]; ?> </td><td><b id="submit"><?php echo $row["crop_name"]; ?> </b></td> <td><?php echo $row["crop_type"]; ?></td>
  			<td><?php echo $row["description"]; ?> </td><td><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></td>
    		<td><?php echo $row["email"]; ?></td><td><?php echo $row["lat"]; ?>,<?php echo $row["longt"]; ?></td>
    		<td><img id="reportphoto" src="images\<?php echo $row["photos"]; ?>"></td></tr>


    	<input id="lat"  type="hidden" value="<?php echo $row["lat"]; ?>" />
    	<input id="lng" type="hidden" value="<?php echo $row["longt"]; ?>" />
    	

    
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


