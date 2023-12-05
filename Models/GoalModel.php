<?php
include('config.php');
class Macro_Goals{
    public static function Create_Goal($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $sql = "INSERT INTO macro_goal(Member_ID,Protein,Carbs,Fat,Calories) values($ID,)";
    }
    public static function Get_Goal($ID){

    }
}
?>