<?php
   session_start();
   unset($_SESSION["stuid"]);
   unset($_SESSION["password"]);
   unset($_SESSION["adminpw"]);
   unset($_SESSION["adminun"]);
   unset($_SESSION["current_page"]);
   session_destroy();
   
   //echo 'You have cleaned session';
   header("Location: ../../index.php");
?>