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
}


?>