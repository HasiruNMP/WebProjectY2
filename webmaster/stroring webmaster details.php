
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




$name = $_POST["name"];
$usname = $_POST["usname"];
$cmpw = $_POST["confirm_password"];



echo  "<br>" . $name . "<br>". $usname . "<br>" . $cmpw . "<br>" ;


if(isset($_REQUEST["submit"]))
{


$sql="INSERT INTO staff (name, username, password) VALUES ('$name', '$usname', '$cmpw');";
}

 if(!mysqli_query($conn,$sql))
 {
    echo "Not Inserted";
 }
 else
    echo "Record Inserted Successfully!";