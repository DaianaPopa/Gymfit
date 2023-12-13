<?php

class TrainerHelper{
    public static function Display_Trainers(){
        $result = Gym_Trainer :: Get_Trainers();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div class='user-item'>";
              echo "<div class='user-top'>";
              echo "<h3>".$row['firstname']."</h3>";
              echo "<button>Apply To Programme >></button>";
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