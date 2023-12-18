<?php
class Macro_Helper{

    public static function Log_New_Day($ID,$protein,$carbs,$calories,$fat){
        Macros ::  Create_Macro_Day($ID,$protein,$carbs,$fat,$calories);
        self :: Log_Success();
    }

    public static function Display_Macros_Achieved($ID){
        $result = Macros :: Get_Macros($ID);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Calories</th><th>Protein</th><th>Carbs</th><th>Fat</th><th>Date Achieved</th></tr>";
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["Calories"]."</td><td>".$row["Protein"]." ".$row["Carb"]."</td><td>".$row["Fat"]."</td><td>".$row["Achieved"]."</td></tr>";
            }
            echo "</table>";
          } else {
            echo "0 results";
          }
    }

    public static function Log_Success(){
        header("location: macroDays.php");
    }
}

?>