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
      href="CSS/programs.css"
    />
    
    
</head>
<body>
  <div class="mobile-container">
   
    
    <div class="topnav">
      <img
      src="Docs/logo2.jpg"
      width="50"
      height="50"
    />
      <!-- Navigation links (hidden by default) -->
      <div id="myLinks">
        <a href="#about">About Us</a>
        <a href="macroDays.php">Macro Tracker</a>
        <a href="ourTrainers.php">Our Trainers</a>
        <a href="#workout">Work Out Planner</a>
        <a href="#workout">Sign Out</a>
      </div>
      <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
</div>
<h1 style="font-size: 50px">Gym Fit</h1>
<div class="program">
  <div id="trainer-image"></div>
  <h2>Your Programs:</h2>
 <p>Here You Can Edit Your Programs</p>
  <label for="aerobics">Aerobics</label>
  <p>Edit the details of your Aerobics program</p>
  <textarea id="aerobics" name="aerobics" rows="4" cols="50">
    Jumping rope helps develop better body awareness, hand-foot coordination, and agility.
    15 to 25 minutes, 3 to 5 times per week
    Start by jogging forward as you swing the jump rope over your head and under your feet. Do this move for 15 seconds.
    Next, reverse your direction and jog backward as you continue to swing the jump rope. Do this move for 15 seconds.
    Finish your set by doing a hopscotch jump for 15 seconds. To do this move, jump rope in place, and as you jump, alternate between jumping your feet out to the sides and then back to the center, similar to how you’d move them while doing jumping jacks. Do this move for 15 seconds.
    Rest for 15 seconds between sets.
    Repeat 18 times.
  </textarea>

  <label for="cardio">Cardio</label>
  <p>Edit the details of your Cardio program</p>
  <textarea id="cardio" name="cardio" rows="4" cols="50">
    Single Leg Stand: To perform
Start with the feet together or no more than 3 inches (in) apart.
Bend the knees slightly and lift one leg 3–6 in off the floor.
Hold this position for 10–15 seconds and return the foot to the floor.
Repeat for the opposite leg.
Stair Climb:
A person can incorporate stairs into a workout by going up and down them several times.
Taking the stairs two at a time and increasing speed to a running pace can further challenge the cardiovascular system and leg muscles.
Squat Jumps:
Stand with the feet hip-width apart and arms at the sides.
Bend at the knees to squat.
From the squat position, jump in the air and extend the hips until the body is straight.
Land softly on the balls of the feet, rolling backward to absorb the shock in the heels.
Repeat using different arm movements to adjust the difficulty.
  </textarea>

  <label for="stretching">Stretching</label>
  <p>Edit the details of your Stretching program</p>
  <textarea id="stretching" name="stretching" rows="4" cols="50">
    Calf Stretch:
    Stand at arm's length from a wall or a piece of sturdy exercise equipment.
    Put your right foot behind your left foot.
    Slowly bend your left leg forward, keeping your right knee straight and your right heel on the floor.
    Hold your back straight and your hips forward. Don't rotate your feet inward or outward.
    Hold for about 30 seconds.
    Switch legs and repeat.
    To deepen the stretch, slightly bend your right knee as you bend your left leg forward.
    Hamstring Stretch:
    Lie on the floor near the outer corner of a wall or a door frame so that your left leg is next to the wall.
    Raise your left leg and rest your left heel against the wall. Keep your left knee slightly bent.
    Gently straighten your left leg until you feel a stretch along the back of your left thigh.
    Hold for about 30 seconds.
    Switch legs and repeat.
    As your flexibility increases, increase the stretch by gradually scooting yourself closer to the wall or door frame.
  </textarea>

  <label for="weights">Weights</label>
  <p>Edit the details of your Weights program</p>
  <textarea id="weights" name="weights" rows="4" cols="50">
    Lunge:
    Hold one dumbbell in each hand with your arms down by your side and your feet shoulder-width apart.
Lift your right foot off the ground and take a big step forward, bending your knee and lowering your body as you go. Stop when your right thigh is parallel to the ground. Ensure that your chest stays proud and your shoulders stay back throughout the movement.
Push up from your right foot, returning to starting position.
Repeat, lunging with your left leg.
Overhead shoulder press:
Stand with your feet shoulder-width apart and a dumbbell in each hand.
Bring the weights up to the fronts of your shoulders, palms facing out.
Keeping your core braced and torso upright, push the dumbbells up, extending your arms as you go.
Pause at the top, then release, bending your elbows and letting the weights come back down to above the shoulders.

  </textarea>
</div>
<div class="footer">
  <img
  src="Docs/logo2.jpg"
  width="100"
  height="100"
/>
  <div class="col-1"></div>

<div class="col-2">
  <h3>Newsletter</h3>
  <form>
    <input type="email" placeholder="Your Email Address" required>
<br>
    <button type="submit">Submit</button>
  </form>
</div>

<div class="col-3">
<p>153 Arundel St,  </p>
 <p>Sheffield City Centre,</p> 
 <p>Sheffield S1 2NU</p>
   <a href="../Views/contactUs.php">Contact Us</a>
</div>
      </div>
    </footer>
</div>
</body>
</html>