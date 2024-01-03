<?php
class Gym_Trainer{
    public static function Create_Trainer($email,$password, $firstname, $surname){
        $conn = Config :: Db_Connect();
        $statement= $conn->prepare("INSERT INTO trainer(Email, Trainer_Password, Firstname, Surname)
        Values(?,?,?,?)");
        $statement->bind_param("ssss",$email,$password, $firstname, $surname);
        $statement->execute();
        $statement->close();
        $conn->close();
    }

    public static function Get_Password_By_Email($email){
        // Get a trainer by email
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Trainer_Password from trainer Where Email = ?");
        $statement->bind_param("s",$email);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        $conn->close();
        if($result->num_rows < 0){
            return "none";
        }
        $password = $result->fetch_assoc();
        if ($password != null){
            return $password["Trainer_Password"];
        }
    }

    public static function Check_Trainer_Exists_By_Email($email){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Trainer_Password From trainer Where Email = ?");
        $statement->bind_param("s",$email);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        $conn->close();
        if($result->num_rows < 0){
            return false;
        }
        else{
            return true;
        }
    }

    public static function Get_Trainer_ID_By_Email_Passsword($email,$password){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Trainer_ID from trainer Where Email = ? AND Trainer_Password = ?");
        $statement->bind_param("ss",$email,$password);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        $statement->close();
        $conn->close();
        return $row["Trainer_ID"];
    }

    public static function Get_Trainers(){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT * from trainer");
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        $conn->close();
        return $result;
    }

    public static function Get_Trainer_ID_By_Email_Name($email,$firstname,$lastname){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Trainer_ID from trainer Where Email = ? AND Where Firstname = ? and where Lastname = ?");
        $statement->bind_param("sss",$email,$firstname,$lastname);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        $conn->close();
        if($result->num_rows < 0){
            return "none";
        }
        $password = $result->fetch_assoc();
        if ($password != null){
            return $password["Trainer_ID"];
        }
    }

    public static function Get_Members_By_Trainer_ID($id){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT * from Gym_Member where Trainer_ID = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        $conn->close();
        return $result;
    }

    public static function Get_Programme_By_Trainer_ID($id){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT description from trainer where Trainer_ID = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $result = $statement->get_result();
        $row = $result->fetch_assoc();
        $statement->close();
        $conn->close();
        return $row["description"];
    }

    public static function Set_Trainer_Programme($id, $desc){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("UPDATE trainer SET description = ? WHERE Trainer_ID = ?");
        $statement->bind_param("si",$desc,$id);
        $statement->execute();
        $statement->close();
        $conn->close();
    }
}
?>
