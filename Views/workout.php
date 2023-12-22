<?php
require("../CONFIG/views_include_config.php");
//Authenticator :: Validate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Workout :: GymFit</title>
    <link rel="stylesheet" href="../CSS/main.css">
    <script src="../JS/jquery.js"></script>
    <script src="../JS/workout.js"></script>
</head>
<body class="normal-body">
    <div id="back-image"></div>
    <h1 class="title">Your Workout</h1>
    <a href="../Views/home.php" class="backlink">Home</a>
    <div class="sep-bar"></div>
    <a href="" class="backlink">Add Workout</a>
    <ul id="workout-list">
        <li class="workout-day">
            <h3 class="workout-day-title">Monday</h3>
            <div class="workout-day-content">
                <?php Workout_Helper :: Display_Workout(1, "Monday"); ?>
            </div>
        </li>
        <li class="workout-day">
            <h3 class="workout-day-title">Tuesday</h3>
            <div class="workout-day-content">
            <?php Workout_Helper :: Display_Workout($_SESSION["UserID"], "Tuesday"); ?>
            </div>
        </li>
        <li class="workout-day">
            <h3 class="workout-day-title">Wednesday</h3>
            <div class="workout-day-content">
            <?php Workout_Helper :: Display_Workout($_SESSION["UserID"], "Wednesday"); ?>
            </div>
        </li>
        <li class="workout-day">
            <h3 class="workout-day-title">Thursday</h3>
            <div class="workout-day-content">
            <?php Workout_Helper :: Display_Workout($_SESSION["UserID"], "Thursday"); ?>
            </div>
        </li>
        <li class="workout-day">
            <h3 class="workout-day-title">Friday</h3>
            <div class="workout-day-content">
            <?php Workout_Helper :: Display_Workout($_SESSION["UserID"], "Friday"); ?>
            </div>
        </li>
        <li class="workout-day">
            <h3 class="workout-day-title">Saturday</h3>
            <div class="workout-day-content">
            <?php Workout_Helper :: Display_Workout($_SESSION["UserID"], "Saturday"); ?>
            </div>
        </li>
        <li class="workout-day">
            <h3 class="workout-day-title">Sunday</h3>
            <div class="workout-day-content">
                <?php Workout_Helper :: Display_Workout($_SESSION["UserID"], "Sunday"); ?>
            </div>
        </li>
    </ul>
</body> 
</html>