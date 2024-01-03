<?php
class Macros{
    public static function Create_Macro_Day($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("INSERT INTO macro_achieved(Member_ID,Protein,Carb,Fat,Calories) values(?,?,?,?,?)");
        $statement->bind_param("iiiii",$ID,$protein,$carbs,$fat,$calories);
        $statement->execute();
        $statement->close();
        $conn->close();
    }

    public static function Get_Macros($ID){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Calories, Protein, Carb, Fat, Achieved from macro_achieved where Member_ID = ?");
        $statement->bind_param("i",$ID);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        $conn->close();
        return $result;
    }
}
?>