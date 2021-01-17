<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created</title>
    <link rel="icon" href="../../img/logo.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    
</body>
</html>
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
    //echo "Server connected";
}

if(!mysqli_select_db($conn,$dbname))
{
    echo "Database Not Selected";
}

else
{
    //echo "Database Selected";
}


$name = $_POST["name"];
$usname = $_POST["usname"];
$cmpw = $_POST["confirm_password"];



//echo  "<br>" . $name . "<br>". $usname . "<br>" . $cmpw . "<br>" ;


if(isset($_REQUEST["submit"]))
{


$sql="INSERT INTO staff (name, username, password) VALUES ('$name', '$usname', '$cmpw');";
}

 if(!mysqli_query($conn,$sql))
 {
    echo "Not Inserted";
 }
 else{
    echo "<center><h4>Account Created</h4><br><h5>Redirecting..</h5></center>";
    header( "refresh:2;url=web-master.php" );
 }
