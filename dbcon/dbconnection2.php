<?php
//NOT THIS.*******************
   $con = "dbname=d3msn9thtped9d host=ec2-3-216-89-250.compute-1.amazonaws.com port=5432 user=plfizbjizkeziw password=11533641747a0e36e8be4ffac1c120c4d4a30ff080c69e30c725bb7249bd937b sslmode=require";


   if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
   }

   $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($con, $sql)) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($con);
    }
    


?>

