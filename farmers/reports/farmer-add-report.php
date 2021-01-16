<?php
session_start();
if ( isset( $_SESSION['femail'] ) ) 
{
  $email = $_SESSION['femail'];
  //echo $email;
}
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
    <title>Add New Report</title>


      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dD4aW06XoB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
   //echo "Server Not connected";
}
else
{
  //alert("Message");
}

if(!mysqli_select_db($conn,$dbname))
{
  //echo "Database Not Selected";
}

else
{
  //echo "Database Selected";
}

?>

<?php
$result = mysqli_query($conn,"SELECT fname,lname,email FROM farmers WHERE email = '$email'");
if (mysqli_num_rows($result) > 0) {
?>


  
<?php

while($row = mysqli_fetch_array($result)) {


?>





















    <link rel="icon" href="../../img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWH-XTux9pCrmqDoV6YM63Ex8FPrAQNLU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%; width:100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // The following example creates a marker in Stockholm, Sweden using a DROP
      // animation. Clicking on the marker will toggle the animation between a BOUNCE
      // animation and no animation.
      let marker;

      function initMap() {
      	let myCenter = new google.maps.LatLng(7.297581160793088,80.63318501586913);
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 13,
          center: { lat: 7.2906, lng: 80.6337 },
        });
        marker = new google.maps.Marker({
          map,
          title: "Select Your Location",
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: { lat: 7.2906, lng: 80.6337 },
        });




      

    
        
       // Create the initial InfoWindow.
        let infoWindow = new google.maps.InfoWindow({
          content: "Select your location",
          position: myCenter,

        });

        infoWindow.open(map);
        // Configure the click listener.
        marker.addListener("click", (mapsMouseEvent) => {
          // Close the current InfoWindow.
          infoWindow.close();
          // Create a new InfoWindow.
          infoWindow = new google.maps.InfoWindow({
            position: mapsMouseEvent.latLng,
            
          });
          infoWindow.setContent(
           
           
            '<form action="farmer-report-added.php" method="post" enctype="multipart/form-data"> <table border="0"> <tr> <th colspan="2"><h1> Enter Your Details</h1></th></tr><input type="hidden" name="fname" value="<?php echo $row["fname"]; ?>"><input type="hidden" name="lname" value="<?php echo $row["lname"]; ?>"><input type="hidden" name="email" value="<?php echo $row["email"]; ?>"> <tr> <th> Crop Name: </th> <td> <input type="text" name="cropnme"> </td> </tr> <br> <tr> <th> Crop Type:</th> <td> <select name="cropt" ><option value="Fruits">Fruits</option><option value="Vegetables">Vegetable</option><option value="Grain">Grain</option></select></td> <br> <tr> <th> Quantity: </th> <td> <input type="text" name="qunt"> </td> </tr> <br> <tr> <th> Description: </th> <td> <input type="text" name="desc"> </td> </tr> <br> <tr> <th> Latitude: </th> <td> <input type="hidden" name="lati"  value="'+ mapsMouseEvent.latLng.lat() +'" > <input type="text"  disabled value="'+ mapsMouseEvent.latLng.lat() +'" > </td> </tr> <br><br> <tr> <th> Longitude: </th> <td> <input type="hidden" name="longi"  value="'+ mapsMouseEvent.latLng.lng() + '" > <input type="text"  disabled value="'+ mapsMouseEvent.latLng.lng() + '" > </td> </tr> <br>  <tr> <th> <label for="myfile">Select Photo1:</label> </th>  <br> <th> <input type="file" name="image"> </tr> </th>  <br>    <tr> <th> <label for="myfile">Select Photo 2:</label> </th>  <br> <th> <input type="file" name="image2"> </tr></th><br>  <tr> <th> <label for="myfile">Select Photo3:</label> </th>  <br> <th> <input type="file" name="image3"></tr></th><br><tr><td><input type="submit" name="submit"> </td> </tr></form> '
          );
          infoWindow.open(map);
        });
      }

// JSON.stringify(mapsMouseEvent.latLng.toJSON())

    </script>
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

  </head>
  
  <body>
    <div id="map"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
