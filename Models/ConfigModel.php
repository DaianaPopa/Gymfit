<?php
Class Config{

    public static function Db_Connect(){
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName = "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword,$DBName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>