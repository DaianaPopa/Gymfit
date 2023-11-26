<?php
class Gym_Trainer{
    public static function Create_Trainer($email,$password){
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName - "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO trainer(Email, Trainer_Password)
        Values($email, $password)";
        $conn->query($sql);
    }

    public static function Get_Password_By_Email($email){
        // Get a trainer by email
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName = "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword,$DBName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Trainer_Password from trainer Where Email = '$email'";
        $result = $conn->query($sql);
        if($result->num_rows < 0){
            return "none";
        }
        $password = $result->fetch_assoc();
        return $password;
    }

    public static function Check_Trainer_Exists_By_Email($email){
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName - "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Trainer_Password From trainer Where Email = '$email'";
        $result = $conn->query($sql);
        if($result->num_rows < 0){
            return false;
        }
        else{
            return true;
        }
    }

    public static function Get_Trainer_ID_By_Email_Passsword($email,$password){
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName - "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Trainer_ID from trainer Where Email = '$email' AND Where Trainer_Password = '$password'";
        $result = $conn->query($sql);
        return $UserID["Trainer_ID"];
    }
}

?>