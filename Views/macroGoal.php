<?php
$_SESSION['member_Id'] = 1;
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
    <p>Goal Information</p>
    <div class="sep-bar"></div>
    <a href="#" id="new-goal">Set a New Goal ▼</a>
    <div id="newGoal-container">
        <form action=""></form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
include("../Controllers/footer.php");
?>
</body>
</html>
