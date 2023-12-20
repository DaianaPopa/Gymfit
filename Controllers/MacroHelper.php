<?php
class Macro_Helper{

    public static function Log_New_Day($ID,$protein,$carbs,$calories,$fat){
        Macros ::  Create_Macro_Day($ID,$protein,$carbs,$fat,$calories);
        self :: Log_Success();
    }

    public static function Display_Macros_Achieved($ID){
        $result = Macros :: Get_Macros($ID);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div class='macro-achieved-container'>";
              echo "<h3>Date: ".$row["Achieved"]. "</h3>";
              echo "<div class='macro-grid'>";
              echo "<p class = 'macro-item'>" . "<span class='bold'>Calories:</span> ". $row["Calories"]. "<p>"."<br>".
                 "<p class = 'macro-item'>"."<span class='bold'>Protein:</span> ". $row["Protein"] . "<p>"."<br>".
                 "<p class = 'macro-item'>"."<span class='bold'>Fat:</span> ". $row["Fat"]."<p>"."<br>".
                 "<p class = 'macro-item'>". "<span class='bold'>Carbs:</span> ". $row["Carb"]. "<p>";
              echo "</div>";
              echo "</div>";
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