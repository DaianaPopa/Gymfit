<?php
class Workout_Helper{
    public static function Get_Workouts(){
        return;
    }
    public static function Remove($workout_ID,$member_ID){
        Workout :: Remove_Workout($workout_ID,$member_ID);
    }
    public static function Alter($ID,$reps,$sets,$member_ID,$name,$day){
        Workout :: Alter_Workout($ID,$reps,$sets,$member_ID,$name,$day);

    }
    public static function Add($reps,$sets,$day,$ID,$name){
        Workout :: Add_Workout($reps,$sets,$day,$ID,$name);
    }

    public static function Display_Workout($id, $day){
        $result = Workout :: Get_Workouts_By_Day($id, $day);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="workout-item">
                      <form action="workout.php" method="post">
                      <input type="hidden" name="workoutRemoveID" value="'.$row['ID'].'">
                      <button class="remove-workout">--</button>
                      </form>
                      <h4>'.$row['workout'].'</h4>
                      <p> -'.$row['reps'].' Reps , '.$row['sets'].' Sets. </p>
                      </div>';
            }
        }
        else{
            echo "<p>No workouts for this day.</p>";
        }
    }
}


?>