<?php
class Macro_Goals{
    public static function Create_Goal($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("INSERT INTO macro_goal(Member_ID,Protein,Carbs,Fat,Calories) values(?,?,?,?,?)");
        $statement->bind_param("iiiii",$ID,$protein,$carbs,$fat,$calories);
        $statement->execute();
        $statement->close();
        $conn->close();
    }
    public static function Get_Goal($ID){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Protein,Carbs,Fat,Calories from macro_goal WHERE Member_ID = ? ");
        $statement->bind_param("i",$ID);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        $conn->close();
        if($result->num_rows == 0){
            return false;
        }
        else{
            return $result->fetch_assoc();
        }
    }
    public static function Update_Goal($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("UPDATE macro_goal SET Protein = ?, Carbs = ?, Fat = ?, Calories = ? WHERE Member_ID = ?");
        $statement->bind_param("iiiii",$protein,$carbs,$fat,$calories,$ID);
        $statement->execute();
        $statement->close();
        $conn->close();
    }
}
?>