<?php
require("../CONFIG/views_include_config.php");

if (isset($_POST["protein"]) && isset($_POST["calories"]) && isset($_POST["fat"]) && isset($_POST["carbs"])){
    Goal_Helper :: New_Goal($_SESSION['UserID'],$_POST['protein'],$_POST['carbs'],$_POST['calories'],$_POST['fat']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gymfit :: Macro Goal</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../CSS/main.css">
</head>
<body>
    <div id="back-image"></div>
    <h1 class="title">Todays Macro Goal</h1>
    <a href="../Views/macroDays.php" class="backlink">Back To Macro Tracker</a>
    <div class="sep-bar"></div>
    <div class="macro-grid"><?php Goal_Helper :: Display_Goal($_SESSION['UserID']);?></div>
    <div class="sep-bar"></div>
    <h2 id="new-goal">Set a New Goal</h2>
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
                    <label for="carbs">Carbs:</label>
                    <input type="text" name="carbs">
                </div>
                <div>
                    <label for="fat">Fat:</label>
                    <input type="text" name="fat">
                </div>
                <div>
                    <button type="submit" class="button">Set Goal</button>
                </div>
            </form>
            <div class="sep-bar"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
//include("../includes/footer.php");
?>
</body>
</html>
