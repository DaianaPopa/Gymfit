
<?php
include '../Controllers/MacroHelper.php';

//skibi test data replace with the real shite when the gazorpazorp is ready to sqwaunch
$_SESSION['member_Id'] = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Gymfit :: Macros</title>
    <link
      rel="stylesheet"
      href="../CSS/homepage.css"
    />
</head>
<body>
    <div id="back-image"></div>
    <h1 class="title">Macro Tracker</h1>
    <div class="macro-header">
        <a href="../Views/macroLogger.php">Log a Macro</a>
        <a href="../Views/macroGoal.php">See Daily Goal</a>
    </div>
    <div class="sep-bar"></div>
    <div>
        <h2 class ="title"> Days Logged: </h2>
        <div>
        <?php Macro_Helper :: Display_Macros_Achieved($_SESSION['member_Id']) ?>;
        </div>
    </div>

    
<?php
//include("../Controllers/footer.php");
?>
</body>
</html>
