<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>GymFit :: Contact Us</title>
</head>
<body>
 <div id="back-image"></div>
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
            <input type="text" name="firstname" id="firstname" class="workout-input" placeholder="First Name"/>
          </div>
          <div>
            <!-- <label for="surname">Surname</label> -->
            <input type="text" name="surname" id="surname" class="workout-input" placeholder="Surname"/>
          </div>
          <div>
            <!-- <label for="Email">Email</label> -->
            <input type="email" name="Email" id="Email" class="workout-input" placeholder="Email" required />
          </div>
          <div>
            <!-- <label for="Tel">Contact Telephone</label> -->
            <input type="tel" name="Tel" id="Tel" class="workout-input" placeholder="Telephone" required />
          </div>
          <label for="Message">Message:</label>
          <div>
            
            <input type="message" name="Message" id="Message" class="workout-input" palceholder="Messages"/>
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
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d76149.78157292848!2d-1.4846933!3d53.3847628!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48790aa9fae8be15%3A0x3e2827f5af06b078!2sSheffield!5e0!3m2!1sen!2suk!4v1701258233592!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      </section>
  </main>
</div>

<?php
include("../includes/footer.php");
?>

</body>
</html>
