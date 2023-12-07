<?php
include("ConfigModel.php");
class Macros{
    public static function Create_Macro_Day($ID,$protein,$carbs,$fat,$calories){
        $conn = Config :: Db_Connect();
        $sql = "INSERT INTO macro_achieved(Member_ID,Protein,Carb,Fat,Calories) values($ID,$protein,$carbs,$fat,$calories)";
        $conn->query($sql);
    }

    public static function Get_Macros($ID){
        $conn = Config :: Db_Connect();
        $sql = "SELECT Calories, Protein, Carbs, Fat, Achieved from macro_achieved where Member_ID = $ID";
        $result = $conn->query($sql);
        return $result;
    }
}

?>