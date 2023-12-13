<?php
class Gym_Trainer{
    public static function Create_Trainer($email,$password){
        $conn = Config :: Db_Connect();
        $sql = "INSERT INTO trainer(Email, Trainer_Password)
        Values($email, $password)";
        $conn->query($sql);
    }

    public static function Get_Password_By_Email($email){
        // Get a trainer by email
        $conn = Config :: Db_Connect();
        $sql = "SELECT Trainer_Password from trainer Where Email = '$email'";
        $result = $conn->query($sql);
        if($result->num_rows < 0){
            return "none";
        }
        $password = $result->fetch_assoc();
        return $password["Trainer_Password"];
    }

    public static function Check_Trainer_Exists_By_Email($email){
        $conn = Config :: Db_Connect();
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
        $conn = Config :: Db_Connect();
        $sql = "SELECT Trainer_ID from trainer Where Email = '$email' AND Where Trainer_Password = '$password'";
        $result = $conn->query($sql);
        return $UserID["Trainer_ID"];
    }

    public static function Get_Trainers(){
        $conn = Config :: Db_Connect();
        $sql = "SELECT * from Trainers";
        $result = $conn->query($sql);
        return $result;
    }

    public static function Get_Trainer_ID_By_Email_Name($email,$firstname,$lastname){
        $conn = Config :: Db_Connect();
        $sql = "SELECT Trainer_ID from trainer Where Email = '$email' AND Where Firstname = '$firstname' and where Lastname = '$Lastname'";
        $result = $conn->query($sql);
        return $UserID["Trainer_ID"];
    }

    public static function Get_Members_By_Trainer_ID($id){
        $conn = Config :: Db_Connect();
        $sql = "SELECT * from Gym_Member where Trainer_ID = '$id'";
        $result = $conn->query($sql);
        return $result;
    }
}

?>