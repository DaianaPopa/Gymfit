<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>GymFit :: Contact Us</title>
<link
      rel="stylesheet"
      href="../CSS/homepage.css"
    />
</head>
<body>

<div class="mainContainer">
  <main>
    <div class="banners">
      <h2>Contact Us</h2>
    </div>
    <section class="twoColumn">
      <div class="input-form" style="margin-bottom: 50px;">
        <form action="thankyou.php" method="post">
          <div>
            <!-- <label for="firstname">First name</label> -->
            <input type="text" name="firstname" id="firstname" placeholder="First Name"/>
          </div>
          <div>
            <!-- <label for="surname">Surname</label> -->
            <input type="text" name="surname" id="surname" placeholder="Surname"/>
          </div>
          <div>
            <!-- <label for="Email">Email</label> -->
            <input type="email" name="Email" id="Email" placeholder="Email" required />
          </div>
          <div>
            <!-- <label for="Tel">Contact Telephone</label> -->
            <input type="tel" name="Tel" id="Tel" placeholder="Telephone" required />
          </div>
          <label for="Message">Message:</label>
          <div>
            
            <input type="message" name="Message" id="Message" palceholder="Messages"/>
          </div>
          <label for="marketing">Subject:</label>
          <div>
            
            <select name="marketing" id="marketing">
                <option value="Other">Other</option>
              <option value="Have an Inquiry">Have an Inquiry</option>
              <option value="Make a Suggestion">Make a Suggestion</option>
              <option value="Report a Problem">Report a Problem</option>
            </select>
          </div>
          <div>
            <button class="btn btn-2" type="submit" value="Send" class="sendButton">Submit</button>
          </div>
        </form>
        </div>
<div class="sideBar">
        <h3>How to find us:</h3>
        <p> Sheffield, South Yorkshire, UK</p>
        <p>Tel:(44) 22445050</p>
        <p>Email: info@gymfit.com</p>
      </div>
      <iframe src="https://www.google.com/maps/place/Sheffield/@53.3827184,-1.6485374,12z/data=!4m15!1m8!3m7!1s0x48790aa9fae8be15:0x3e2827f5af06b078!2sSheffield!3b1!8m2!3d53.381129!4d-1.470085!16zL20vMG03NWc!3m5!1s0x48790aa9fae8be15:0x3e2827f5af06b078!8m2!3d53.381129!4d-1.470085!16zL20vMG03NWc?entry=ttu" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
  </main>
</div>

<?php
include("../Controllers/footer.php");
?>

</body>
</html>
