<?php
require("../CONFIG/views_include_config.php");
Authenticator :: Validate();

if (isset($_POST["workout"]) && isset($_POST["reps"]) && isset($_POST["sets"]) && isset($_POST["day"])){
    Workout_Helper :: Add($_POST["reps"], $_POST["sets"], $_POST["day"], $_SESSION["UserID"], $_POST["workout"]);
    header("Location: Workout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add A Workout :: GymFit</title>
    <link rel="stylesheet" href="../CSS/main.css">
</head>
<body class='normal-body'>
    <div id="back-image"></div>
    <h1 class="title">Add A Workout</h1>
    <a href="../Views/workout.php" class="backlink">Back to Workouts</a>
    <div class="sep-bar"></div>
    <form class="form" method="POST">
        <div>
            <label for="workout">Workout Name:</label>
            <input type="text" name="workout">
        </div>
        <div>
            <label for="reps">Reps:</label>
            <input type="number" name="reps" min="1">
        </div>
        <div>
            <label for="sets">Sets:</label>
            <input type="number" name="sets" min="1">
        </div>
        <div>
            <label for="day">Day</label>
            <Select name="day">
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </Select>
        </div>
        <div>
            <button type="submit" class="button">Add Workout</button>
        </div>
    </form>
    <div class="sep-bar"></div>
</body>
</html>