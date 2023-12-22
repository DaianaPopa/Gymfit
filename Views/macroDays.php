<?php
require("../CONFIG/views_include_config.php");
Authenticator :: Validate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Gymfit :: Macros</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <script src="../JS/workout.js"></script>
</head>
<body>
    <div id="back-image"></div>
    <h1 class="title">Macro Tracker</h1>
    <a href="../Views/home.php" class="backlink">Home</a>
    <div class="macro-header">
        <a href="../Views/macroLogger.php">Log a Macro</a>
        <a href="../Views/macroGoal.php">See Daily Goal</a>
    </div>
    <div class="sep-bar"></div>
    <div>
        <h2 class ="title"> Days Logged: </h2>
        <div>
        <?php Macro_Helper :: Display_Macros_Achieved($_SESSION['UserID']) ?>
        </div>
    </div>

    
<?php
?>
</body>
</html>
