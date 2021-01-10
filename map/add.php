<!DOCTYPE html>
<html>
  <head>
    <title>My Report</title>
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




$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$cropname = $_POST["cropnme"];
$croptype = $_POST["cropt"];
$quantity = $_POST["qunt"];
$descrip = $_POST["desc"];
$latitude = $_POST["lati"];
$longitude = $_POST["longi"];
//photo1
$img=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img);
//photo2
$img2=$_FILES['image2']['name'];
$temp_name=$_FILES['image2']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img2);
//photo3
$img3=$_FILES['image3']['name'];
$temp_name=$_FILES['image3']['tmp_name'];
$path = "images/";
move_uploaded_file($temp_name,$path.$img3);

echo  "<br>" . $firstname . "<br>". $lastname . "<br>" . $email . "<br>" . $cropname . "<br>". $croptype . "<br>" . $quantity ."<br>" . $descrip .  "<br>"  . $latitude . "<br>"   . $longitude . "<br>". $img . "<br>" . "<br>". $img2 . "<br>" . "<br>". $img3 . "<br>";


if(isset($_REQUEST["submit"]))
{


$sql="INSERT INTO reports (email, fname, lname, crop_name, crop_type, photo1, photo2, photo3, lat, longt, description) VALUES ('$email', '$firstname', '$lastname', '$cropname', '$croptype', '$img', '$img2', '$img3','$latitude', '$longitude', '$descrip');";
}

 if(!mysqli_query($conn,$sql))
 {
 	echo "Not Inserted";
 }
 else
 	echo "Record Inserted Successfully!";



?>




<?php

$result = mysqli_query($conn,"SELECT * FROM reports where fname='$firstname '");
?>





    	<?php

?>
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
<input type="button" name="delete" value="Delete My Report" onclick="deleteFunction()"> 
<input type="button" name="update" value="Update My Report"> 
</body>
</html>



