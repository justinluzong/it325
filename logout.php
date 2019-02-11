<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleared the login session.';
   header('Refresh: 2; URL = login.php');
?>