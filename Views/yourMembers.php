<?php require("../CONFIG/views_include_config.php");
Authenticator :: Validate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Trainees :: Gymfit</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-fmGlAWLI3Go9un1WX2Ut5vleFxSqyF6+RsTID0Cwj2P4M//pBuPvZP9tmIhOZsjcRdbjN4JQTmzXppGQV9wqGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../JS/menu.js"></script>
  </head>
<body class="normal-body">
<?php Authenticator :: Load_Header(); ?>
  <div id="ourTrainers-back"></div>
  <div class="ourTrainers-header">
    <h2>Your Trainees</h2>
    <p>Below is a list of members that have chosen to apply to your programme.</p>
  </div>
  <div class="sep-bar"></div>
  <div class="display-user-grid">
    <?php
    MemberHelper :: Display_Members($_SESSION["UserID"]); //Take the trainers session ID as parameter to be able to display
    ?>
  </div>
</body>
</html>