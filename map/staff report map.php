<!DOCTYPE html>
<html>
  <head>
    <title>Marker Animations</title>
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

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

      .modal{
        z-index: 5;
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
  </head>
  <body>
  <nav class="grey darken-3">
        <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="sass.html">Reports</a></li>
            <li><a href="badges.html">Messages</a></li>
            <li><a href="badges.html">Graphs</a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="waves-effect waves-light btn">Log In <i class="material-icons  right">account_circle</i></a></li>
        </ul>
        </div>
        </nav>
  	

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
          <p><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?> | <?php echo $row["email"]; ?></p>
          <p>Description: <?php echo $row["description"]; ?></p>
          <br>
        </div>
        <div class="card-action">
          <a href="#" onclick="initMap(<?php echo $row['lat']; ?>,<?php echo $row['longt']; ?>)">Locate</a>
          <a href="#">Message</a>
          <a id="expand" href="#modal1">Expand</a>
        </div>
      </div>
    </div>
  </div>

<input id="lat"  type="hidden" value="<?php echo $row["lat"]; ?>" />
<input id="lng" type="hidden" value="<?php echo $row["longt"]; ?>" />

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
        <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  
  </div>



  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("modal-close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
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
</div>

<div id="map"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>


