<?php
class Goal_Helper{
    public static function Display_Goal($ID){
        $result = Macro_Goals :: Get_Goal($ID);
        if($result == false){
            echo "<p>"."No Goal Set Yet"."<p>";
        }
        else{
            echo "<p class = 'macro-item'>" . "<span class='bold'>Calories:</span> ". $result["Calories"]. "<p>"."<br>".
                 "<p class = 'macro-item'>"."<span class='bold'>Protein:</span> ". $result["Protein"] . "<p>"."<br>".
                 "<p class = 'macro-item'>"."<span class='bold'>Fat:</span> ". $result["Fat"]."<p>"."<br>".
                 "<p class = 'macro-item'>". "<span class='bold'>Carbs:</span> ". $result["Carbs"]. "<p>";
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