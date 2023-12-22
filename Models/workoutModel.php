<?php
class Workout{
    public static function Add_Workout($reps,$sets,$day,$ID,$name){
        $conn = Config :: Db_Connect();
        $sql = "INSERT INTO workout(Member_ID,sets,reps,DOTW,workout)values($ID,$sets,$reps,'$day', '$name')";
        $conn->query($sql);
    }
    public static function Remove_Workout($workout_ID,$member_ID){
        $conn = Config :: Db_Connect();
        $sql = "DELETE FROM workout where ID = '$workout_ID' and Member_ID = '$member_ID'";
        $conn->query($sql);
    }
    public static function Alter_Workout($ID,$reps,$sets,$member_ID,$name,$day){
        $conn = Config :: Db_Connect();
        $sql = "UPDATE workout SET reps = $reps, sets = $sets,DOTW = $day, workout = $name WHERE ID = $ID and Member_ID = $member_ID";
        $conn->query($sql);
    }

    public static function Get_Workouts_By_Day($ID,$day){
        $conn = Config :: Db_Connect();
        $sql = "SELECT ID,sets,reps,workout from workout WHERE Member_ID = $ID and DOTW = '$day'";
        $result = $conn->query($sql);
        return $result;
    }
}
?>