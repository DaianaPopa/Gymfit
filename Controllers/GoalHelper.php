<?php
include('../Models/GoalModel.php');
class Goal_Helper{
    public static function Display_Goal($ID){
        $result = Macro_Goal :: Get_Goal($ID);
        if($result == false){
            echo "No Goal Set Yet";
            Macro_Goal :: Create_Goal($ID,0,0,0,0);
        }
        else{
            echo "Calories: ". $result["Calories"];
            echo "Protein: ". $result["Protein"];
            echo "Fat: ". $result["Fat"];
            echo "Carbs: ". $result["Carbs"];
        }
    }

    public static function New_Goal(){

    }
}
?>