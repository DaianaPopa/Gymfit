<?php
//Re-initailize session
session_start();
//Reset all session variables
session_destroy();
//return to login page
header("Location: ../index.php");

?>