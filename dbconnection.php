<?php

   $con = "dbname=d3msn9thtped9d host=ec2-3-216-89-250.compute-1.amazonaws.com port=5432 user=plfizbjizkeziw password=11533641747a0e36e8be4ffac1c120c4d4a30ff080c69e30c725bb7249bd937b sslmode=require";


   if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
   }

?>