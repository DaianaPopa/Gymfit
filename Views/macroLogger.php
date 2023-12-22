<?php
require("../CONFIG/views_include_config.php");
Authenticator :: Validate();
if (isset($_POST["protein"]) && isset($_POST["calories"]) && isset($_POST["fat"]) && isset($_POST["carbs"])){
    Macro_Helper :: Log_New_Day($_SESSION['UserID'],$_POST['protein'],$_POST['carbs'],$_POST['calories'],$_POST['fat']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Gymfit :: Log a Macro</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>
<body>
    <div id="back-image"></div>
    <h1 class="title">Log Todays Macros</h1>
    <a href="../Views/macroDays.php" class="backlink">Back To Macro Tracker</a>
    <div class="sep-bar"></div>
            <form method="POST" class="form">
                <div>
                    <label for="calories">Calories:</label>
                    <input type="text" name="calories">
                </div>
                <div>
                    <label for="protein">Protein:</label>
                    <input type="text" name="protein">
                </div>
                <div>
                    <label for="calories">Carbs:</label>
                    <input type="text" name="carbs">
                </div>
                <div>
                    <label for="protein">Fat:</label>
                    <input type="text" name="fat">
                </div>
                <div>
                    <button type="submit" class="button">Log</button>
                </div>
            </form>
            <div class="sep-bar"></div>
    </div>
    
<?php
//include("../Controllers/footer.php");
?>
</body>
</html>
