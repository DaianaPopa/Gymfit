<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Trainees :: Gymfit</title>
</head>
<body class="normal-body">
  <div id="ourTrainers-back"></div>
  <div class="ourTrainers-header">
    <h2>Your Trainees</h2>
    <p>Below is a list of members that have chosen to apply to your programme.</p>
  </div>
  <div class="sep-bar"></div>
  <div class="display-user-grid">
    <?php 
    include("../Controllers/TrainersHelper.php");
    MemberHelper :: Display_Members($_SESSION["User-ID"]); //Take the trainers session ID as parameter to be able to display
    ?>
  </div>
</body>
</html>