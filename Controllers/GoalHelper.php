<?php
include("../Models/GoalModel.php");
class Goal_Helper{
    public static function Display_Goal($ID){
        $result = Macro_Goals :: Get_Goal($ID);
        if($result == false){
            echo "<p>"."No Goal Set Yet"."<p>";
        }
        else{
            echo "<p>" . "Calories: ". $result["Calories"]. "<p>"."<br>".
                "<p>"."Protein: ". $result["Protein"] . "<p>"."<br>".
                "<p>"."Fat: ". $result["Fat"]."<p>"."<br>".
                "<p>". "Carbs: ". $result["Carbs"]. "<p>";
        }
    }

    public static function New_Goal($ID,$protein,$carbs,$calories,$fat){

        Macro_Goals :: Update_Goal($ID,$protein,$carbs,$fat,$calories);
        self :: Set_Success();

    }

    public static function Set_Success()
    {
        header("location: macroGoal.php");
    }
}
?>