<?php 
require("../CONFIG/views_include_config.php");
Authenticator :: Validate(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>GymFit :: About Us</title>
<link rel="icon" type="image/x-icon" href="../favicon.ico">
 <link
      rel="stylesheet"
      href="../CSS/login.css" 
    />
    <link
      rel="stylesheet"
      href="../CSS/home.css"
    />
    
</head>
<body>  

 <div id="back-image"></div>
<div class="mainContainer">
<?php Authenticator :: Load_Header(); ?>
  <main>
    <div class="banners">
      <h2>About Us</h2>
      <br>
</div>
         <section class="twoColumn">
         <div class="input-form" style="margin-bottom: 50px;">
    
      <p> We want to make sure that absolutely everyone feels welcome.
        <br>Whether this is your first time in a gym and you are at the very start of 
        <br>your wellness journey or you are looking to achieve a new personal best. 
        <br>Whatever your goal and whatever you want to achieve, 
        <br> we are here to help you.</p>
        <br>
        <div>
            <button class="btn btn-2" type="submit" value="Send" class="sendButton">Join Now</button>
        </div>
        <br>
        <p><a href="#">Terms & Conditions</a></p>
      <p><a href="#">Health and Safety</a></p>
    </div>
    
<div class="sideBar">
        <h3>Facilities:</h3>
        <br>
        <p>Car parcking;</p>
        <p>Shower;</p>
        <p>Open 24/7</p>
       <p><a href="../Views/ourTrainers.php">Personal Training;</a></p>
      <p><a href="../Views/foodLibrary.php">Access food library;</a></p>
        <p><a href="../Views/macroGoal.php">Set a daily goal;</a></p>

    
    
      </div>
      </section>
  </main>
</div>
<?php
include("../includes/footer.php");
?>
</body>
</html>
