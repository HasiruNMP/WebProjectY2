<?php
session_start();
if ( isset( $_SESSION['femail'] ) ) 
{
  $email = $_SESSION['femail'];
}
else 
{
	//$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
	header("Location: ../../index.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" href="../../img/logo.png">
    <title>My Reports</title>
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"> 
    </script> 
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWH-XTux9pCrmqDoV6YM63Ex8FPrAQNLU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>

    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:100%; width:70%;
        float:right;
        
      }

      #leftpanel{
        height:100%;
        width:30%;
        background-color: lightblue;
        float:left;
        overflow: scroll;
      }

      .reportphoto{
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

      .materialboxed{
        z-index: 5;
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



  //google.maps.event.addDomListener(document.getElementById('report'), 'click', function(evt) {
    var marker = new google.maps.Marker({

      position: {
        lat: parseFloat(rlan),
        lng: parseFloat(rlng)
      },
      map: map
    });
  //});
    //marker.setMap(map);

google.maps.event.addDomListener(window, 'load', initMap);
     
}
    </script>

<nav class="grey darken-3">
  <div class="nav-wrapper">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="#"><b>My Reports</b> </a></li>
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
$result = mysqli_query($conn,"SELECT * FROM reports WHERE email = '$email'");
if (mysqli_num_rows($result) > 0) {
?>


  
<?php

while($row = mysqli_fetch_array($result)) {


?>
  <div class="row">
    <div class="col s12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><b><?php echo $row["crop_name"]; ?> | <?php echo $row["quantity"]; ?> </b></span>
          <p>Quality: <?php echo $row["quality"]; ?></p>
          <p>Description: <?php echo $row["description"]; ?></p>
          <br>
          <table>
          <tr>
          <td><img class="materialboxed" width="150" src="images/<?php echo $row['photo1']; ?>"></td>
          <td><img class="materialboxed" width="150" src="images/<?php echo $row['photo2']; ?>"></td>
          <td><img class="materialboxed" width="150" src="images/<?php echo $row['photo3']; ?>"></td>
          </tr>
          </table>
        </div>
        <div class="card-action">
          <a href="#" onclick="initMap(<?php echo $row['lat']; ?>,<?php echo $row['longt']; ?>)">Locate</a>
          <a onclick="edit('<?php echo $row['report_id']; ?>')">Edit report</a>
          <!-- <a id="expand" onclick="reply_click()" class="waves-effect waves-light btn green darken-1 modal-trigger" href="#demo-modal">Expand</a> -->
        </div>
      </div>
    </div>
  </div>

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


  <script>
    function edit(rid){
      var queryString = "?" + rid + "&" + rid;
      window.location.href = 'farmer-edit-report.php' + queryString;
    }
  </script>








<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>


