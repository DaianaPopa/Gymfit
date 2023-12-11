<?php

class TrainerHelper{
    public static function Display_Trainers(){
        $result = Gym_Trainer :: Get_Trainers();
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Email</th></tr>";
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["Trainer_ID"]."</td><td>".$row["Firstname"]." ".$row["Password"]."</td><td>".$row["Email"]."</td></tr>";
            }
            echo "</table>";
          } else {
            echo "0 results";
          }
    }
}

?>