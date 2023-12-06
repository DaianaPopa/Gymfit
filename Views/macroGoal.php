<?php
// skibi toitlet
include '../Controllers/GoalHelper.php';

//skibi test data replace with the real shite when the gazorpazorp is ready to sqwaunch
$_SESSION['member_Id'] = 1;

if (isset($_POST["protein"]) && isset($_POST["calories"]) && isset($_POST["fat"]) && isset($_POST["carbs"])){
    Goal_Helper :: New_Goal($_SESSION['member_Id'],$_POST['protein'],$_POST['carbs'],$_POST['calories'],$_POST['fat']);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="../CSS/homepage.css"
    />
    <link rel="stylesheet" href="../CSS/main.css">
</head>
<body>
    <div id="back-image"></div>
    <h1 class="title">Todays Macro Goal</h1>
    <div class"sep-bar"></div>
    <div><?php Goal_Helper :: Display_Goal($_SESSION['member_Id']);?></div>
    <div class="sep-bar"></div>
    <a href="#" id="new-goal">Set a New Goal ▼</a>
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
                <div class="sep-bar"></div>
            </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
include("../Controllers/footer.php");
?>
</body>
</html>
