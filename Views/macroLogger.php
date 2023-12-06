<?php
include '../Controllers/MacroHelper.php';

//skibi test data replace with the real shite when the gazorpazorp is ready to sqwaunch
$_SESSION['member_Id'] = 1;

if (isset($_POST["protein"]) && isset($_POST["calories"]) && isset($_POST["fat"]) && isset($_POST["carbs"])){
    Macro_Helper :: Log_New_Day($_SESSION['member_Id'],$_POST['protein'],$_POST['carbs'],$_POST['calories'],$_POST['fat']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Gymfit :: Log a Macro</title>
    <link
      rel="stylesheet"
      href="../CSS/homepage.css"
    />
</head>
<body>
    <div id="back-image"></div>
    <h1 class="title">Log Todays Macros</h1>
    <div class="sep-bar"></div>
    <a href="#" id="new-goal">Log Macro▼</a>
            <div class="top-bar">
                <span class="divider-full"></span>
            </div>
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
                <div class="sep-bar"></div>
            </form>
    </div>
    
<?php
//include("../Controllers/footer.php");
?>
</body>
</html>
