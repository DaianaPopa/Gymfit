<?php
class Goal_Helper{
    public static function Display_Goal($ID){
        $result = Macro_Goal :: Get_Goal($ID);
        if($result == false){
            echo "<p>"."No Goal Set Yet"."<p>";
            Macro_Goal :: Create_Goal($ID,0,0,0,0);
        }
        else{
            echo "<p>" . "Calories: ". $result["Calories"]. "<p>";
            echo "<p>"."Protein: ". $result["Protein"] . "<p>";
            echo "<p>"."Fat: ". $result["Fat"]."<p>";
            echo "<p>". "Carbs: ". $result["Carbs"]. "<p>";
        }
    }

    public static function New_Goal($ID){
        $protein = $_POST['protein'];
        $carbs = $_POST['protein'];
        $fat = $_POST['protein'];
        $calories = $_POST['protein'];
    }
}
?>