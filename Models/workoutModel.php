<?php
class Workout{
    public static function Add_Workout($reps,$sets,$day,$ID,$name){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("INSERT INTO workout(Member_ID,sets,reps,DOTW,workout)values(?,?,?,?,?)");
        $statement->bind_param("iiiss",$ID,$sets,$reps,$day,$name);
        $statement->execute();
        $statement->close();
        $conn->close();
    }
    public static function Remove_Workout($workout_ID,$member_ID){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("DELETE FROM workout where ID = ? and Member_ID = ?");
        $statement->bind_param("ii",$workout_ID,$member_ID);
        $statement->execute();
        $statement->close();
        $conn->close();
    }
    public static function Alter_Workout($ID,$reps,$sets,$member_ID,$name,$day){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("UPDATE workout SET reps = ?, sets = ?,DOTW = '?', workout = ?
        WHERE ID = ? and Member_ID = ?");
        $statement->bind_param("iissii",$reps,$sets,$day,$name,$ID,$member_ID);
        $statement->execute();
        $statement->close();
        $conn->close();
    }

    public static function Get_Workouts_By_Day($ID,$day){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT ID,sets,reps,workout from workout WHERE Member_ID = ? and DOTW = ?");
        $statement->bind_param("is",$ID,$day);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        $conn->close();
        return $result;
    }
}
?>
