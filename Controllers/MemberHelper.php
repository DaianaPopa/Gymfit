<?php

class MemberHelper{
    public static function Display_Members($id){
        $result = Gym_Trainer :: Get_Members_By_Trainer_ID($id);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div class='user-item'>";
              echo "<div class='user-top'>";
              echo "<h3>".$row['Firstname']."</h3>";
              echo "</div>";
              echo "<p class='user-email'>".$row['Email']."</p>";
              echo "<p class='user-email'>".$row['DOB']."</p>";
              echo "<div class='user-sep'></div>";
              echo "</div>";
            }
          } else {
            echo "<h2>You currently have no members on your programme</h2>";
          }
    }
}
?>