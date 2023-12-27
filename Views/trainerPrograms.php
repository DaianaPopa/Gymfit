<?php require("../CONFIG/views_include_config.php");
//Authenticator :: Validate();
$desc = TrainerHelper :: Get_Programme($_SESSION["UserID"]);
if (isset($_POST["programme"])){
  TrainerHelper :: Set_Programme($_SESSION["UserID"], $_POST["programme"]);
  unset($_POST);
  header("Location: trainerPrograms.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymFit :: TrainerPrograms</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-fmGlAWLI3Go9un1WX2Ut5vleFxSqyF6+RsTID0Cwj2P4M//pBuPvZP9tmIhOZsjcRdbjN4JQTmzXppGQV9wqGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="../CSS/home.css"
    />
    <script src="../JS/menu.js"></script>
    <script src="../JS/jquery.js"></script>
    <script src="../JS/trainerPrograms.js"></script>
    
    
</head>
<body class="normal-body">
<?php Authenticator :: Load_Header(); ?>
<h1 style="font-size: 50px">Gym Fit</h1>
<div class="program">
  <div id="trainer-image"></div>
  <h2>Your Programme:</h2>
  <p>Here You Can Edit The Details Of Your Programme</p>
  <div class="sep-bar"></div>
  <p id="edit-programme-btn">Edit</p>
  <p id="cancel-programme-edit">Cancel</p>
  <div id="programme-display">
    <p><?php echo $desc; ?></p>
  </div>
  <div id="programme-edit">
    <form action="trainerPrograms.php" method="post">
      <textarea id="programme" name="programme" rows="4" cols="100"><?php echo $desc; ?></textarea>
      <button type="submit" class="button">Submit</button>
    </form>
  </div>
  <div class="sep-bar"></div>
</div>
</body>
</html>