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



$reportid= $_POST["rpid"];
$quality = $_POST["quality"];
$decision= $_POST["decision"];



echo  "<br>" . $reportid . "<br>". $quality . "<br>" . "<br>". $decision . "<br>";


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