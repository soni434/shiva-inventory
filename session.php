<?php
//start the session
session_start();
if (!isset($_SESSION["name"])){             //store user data in session
    header("Location: login.php");              // redirect to first page           
    exit();
}
 ?>