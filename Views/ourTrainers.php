<?php
require("../CONFIG/views_include_config.php");
//Authenticator :: Validate();
if (isset($_SESSION["UserID"]) && isset($_POST["trainerIdToSet"])){
  Gym_Member :: Set_Members_Trainer_By_ID($_SESSION["UserID"], $_POST["trainerIdToSet"]);
} 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Trainers :: Gymfit</title>
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/home.css">
  <?php
  include("../includes/header.php");
  ?>
</head>
<body class="normal-body">
  <div id="ourTrainers-back"></div>
  <div class="ourTrainers-header">
    <h2>Our Trainers</h2>
    <p>Pick a trainer that suits your needs, each offer a bespoke, unique programme.</p>
  </div>
  <div class="sep-bar"></div>
  <div class="display-user-grid">
    <?php 
    TrainerHelper :: Display_Trainers();
    ?>
  </div>
</body>
</html>