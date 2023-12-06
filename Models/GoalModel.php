<?php
include("ConfigModel.php");
class Macro_Goals{
    public static function Create_Goal($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $sql = "INSERT INTO macro_goal(Member_ID,Protein,Carbs,Fat,Calories) values($ID,$protein,$carbs,$fat,$calories)";
        $conn->query($sql);
    }
    public static function Get_Goal($ID){
        $conn = Config :: Db_Connect();
        $sql = "SELECT Protein,Carbs,Fat,Calories from macro_goal WHERE Member_ID = $ID ";
        $result = $conn->query($sql);
        if($result->num_rows == 0){
            return false;
        }
        else{
            return $result->fetch_assoc();
        }
    }
    public static function Update_Goal($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $sql = "UPDATE macro_goal SET Protein = $protein, Carbs = $carbs, Fat = $fat, Calories = $calories WHERE Member_ID = $ID";
        $conn->query($sql);
    }
}
?>