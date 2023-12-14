<?php
/* Code to redirect to login page if this is accessed without login, commented out for development
if ($_SESSION["Login-State"] == false){
    header("location: index.php");
}
*/
//Load data within this page using a db query, with $_SESSION["UserID"] as a parameter
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymFit :: Home</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-fmGlAWLI3Go9un1WX2Ut5vleFxSqyF6+RsTID0Cwj2P4M//pBuPvZP9tmIhOZsjcRdbjN4JQTmzXppGQV9wqGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="../CSS/home.css"
    />
    
    
</head>
<body>
  Include will change based on the session wide variable after login
<?php
if ($_SESSION["User-Type"] == "Member"){
  include("../includes/header.php");
}
else if ($_SESSION["User-Type"] == "Trainer"){
  include("../includes/trainerHeader.php");
}
else{
  include("../includes/header.php"); //Temporary for development
}
?>

<div class ="box">
<div id="bg-image"></div>
<div class="bg-text">
  <h2>Welcome To</h2>
  <h1 style="font-size: 50px">Gym Fit</h1>
  <p>This is our homepage, you can access all the relevant pages in the menu above</p>
  <p>Thank you for joining our gym</p>
</div>
</div>

<?php
include("../includes/footer.php");
?>
</body>
</html>
