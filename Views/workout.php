<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GymFit :: Workout</title>
    <link
      rel="stylesheet"
      href="../CSS/homepage.css"
    />

  </head>
  <body>
  <div id="back-image"></div>
    <h1 class="title">Workout</h1>
    <h5><p>Getting into a consistent fitness routine can feel daunting, but it is the only way to see real results. 
          Exercising regularly can feel hard when you are not used to it, but our thainers and classes are here to help you. 
        </p></h5>

    <section>
      <div class="projects grid">
      <div class="container">
           <h5><span class="p-hover">Our Classes</span></h5>
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
<section>
<div class="projects grid">
<div class="container">
<h5><span class="p-hover">Our Trainers</span></h5>
<div class="row" style=" margin-bottom: 30px;">
<div class="col-lg-4">
            <img class="rounded-circle" src="../Docs/trainer1.jpg" alt="Trainer1" width="140" height="140">
            <p>Tomas</p>
            <p>Specialty: Resistance training.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
 </div>
  <div class="col-lg-4">
            <img class="rounded-circle" src="../Docs/trainer2.png" alt="trainer2" width="140" height="140">
            <p>Ashley</p>
            <p>Specialty: Fat reduction and muscle gain.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
 </div>
  <div class="col-lg-4">
            <img class="rounded-circle" src="../Docs/trainer3.jpg" alt="Traine3" width="140" height="140">
            <p>Callum</p>
            <p>Specialty: Hypertrophy and strength training.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
</div>
</div>
</div>
</section>

<?php
include("../Controllers/footer.php");
?>
</body>
</html>
