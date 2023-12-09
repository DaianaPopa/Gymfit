<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GymFit :: Workout</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link
      rel="stylesheet"
      href="../CSS/login.css"
      href="../CSS/main.css"
    />
     <link
      rel="stylesheet"
      href="../CSS/home.css"
    />

 </head>
  <body>
  <?php
include("../includes/header.php");
?>
  <body background = "../Docs/cover.jpg" 
style= " background-size: cover">
    
    <h1 class="title">Workout</h1>
    <h5><p>Getting into a consistent fitness routine can feel daunting,
    but it is the only way to see real results. 
     <br>Exercising regularly can feel hard when you are not used to it,
      but our thainers and classes are here to help you.    </p>
          <a href="../Views/ourTrainers.php">See our Trainers</a>
        </p></h5>
        <div>  
</div>

    <section>
      <div class="projects grid">
      <div class="container">
         
      <div class="row" style=" margin-bottom: 30px;">
      <div class="col-md-4 projects-1">
            <img src="../Docs/aerobic.png" class="img-fluid" alt="workou1">
            <p>Aerobic</p>
            <p class="card-text"><small class="text-muted">60 min</small></p>
       </div>
      <div class="col-md-4 projects-1">
              <img src="../Docs/cardio.jpg" class="img-fluid" alt="workou2">
              <p>Cardio</p>
               <p class="card-text"><small class="text-muted">90 min</small></p>
        </div>
        <div class="col-md-4 projects-1">
              <img src="../Docs/Stretching.jpg" class="img-fluid" alt="workou3">
              <p>Stretching</p>
              <p class="card-text"><small class="text-muted">30 min</small></p>
        </div>
        </div>
       
        <div class="row">
        <div class="col-md-4 projects-1">
               <img src="../Docs/sprint.jpg" class="img-fluid" alt="workout1">
               <p>Sprint</p>
               <p class="card-text"><small class="text-muted">30 min</small></p>
        </div>
        <div class="col-md-4 projects-1">
               <img src="../Docs/bodybuilding.jpg" class="img-fluid" alt="workout2">
              <p>Bodybuilding</p>
              <p class="card-text"><small class="text-muted">60 min</small></p>
       </div>
       <div class="col-md-4 projects-1">
             <img src="../Docs/Weight-training.jpg" class="img-fluid" alt="workout3">
            <p>Weight training</p>
            <p class="card-text"><small class="text-muted">90 min</small></p>
       </div>
       </div>
       </div>
</div>
</section>
    
<?php
include("../includes/footer.php");
?>
</body>
</html>
