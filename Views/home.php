<?php
require_once('../Controllers/controller.php');
/* Code to redirect to login page if this is accessed without login, commented out for development
if ($_SESSION["Login-State"] == false){
    header("location: index.php");
}
*/
//Include Different Headers depending on which user has logged in using $_SESSION["User-Type"]
//Load data within this page using a db query, with $_SESSION["UserID"] as a parameter
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <?php
include("../Controllers/footer.php");
?>
</body>
</html>
