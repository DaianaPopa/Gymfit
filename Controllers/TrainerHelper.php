<?php

class TrainerHelper{
    public static function Display_Trainers(){
        $result = Gym_Trainer :: Get_Trainers();
        $currentTrainer = Gym_Member :: Get_Trainer_By_Member_ID($_SESSION["User-ID"]);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div class='user-item'>";
              echo "<div class='user-top'>";
              echo "<h3>".$row['firstname']."</h3>";
              echo "<form action='setTrainer.php' method='post'>";
              echo "<input type='hidden' name='trainerIdToSet' value=".$row['Trainer_ID']."</input>";
              echo "<button type='submit'>Apply To Programme >></button>";
              echo "</form>";
              echo "</div>";
              echo "<p class='user-email'>".$row['email']."</p>";
              echo "<div class='user-sep'></div>";
              echo "<p>".$row['description']."<p>";
              echo "</div>";
            }
          } else {
            echo "<h2>There are currently no trainers or programmes avaliable, check back later.</h2>";
          }
    }
}

?>