<?php
   session_start();
   unset($_SESSION["wmemail"]);
   unset($_SESSION["wmpassword"]);
   session_destroy();
   
   //echo 'You have cleaned session';
   header("Location: ../../portal.php");
?>