<!DOCTYPE html> 
<html> 
  
<head> 
    <title> 
        Passing JavaScript variables to PHP 
    </title> 
</head> 
      
<body> 
    <h1 style="color:green;"> 
        GeeksforGeeks 
    </h1> 
      
    <form method="get" name="form" action="#"> 
        <input type="text" placeholder="Enter Data" name="data" value="qwert"> 
        <input type="submit" value="Submit"> 
    </form> 
</body> 

<?php 
$result = $_GET['data']; 
echo $result; 
?> 
  
</html> 