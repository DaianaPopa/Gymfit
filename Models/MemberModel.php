<?php
class Gym_Member{
    
    public static function Create_Member($email,$password, $firstname, $surname){
        //THis function creates a new member call it with Gym_Member :: Create_Member
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("INSERT INTO gym_member(Email, Member_Password, Firstname, Surname)Values(?,?,?,?)");
        $statement->bind_param("ssss",$email,$password, $firstname, $surname);
        $statement->execute();
        $statement->close();
        $conn->close();
    }

    public static function Get_Password_By_Email($email){
        // Get a member by email
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Member_Password from Gym_Member Where Email = ?");
        $statement->bind_param("s",$email);
        $statement->execute();
        $result = $statement->get_result();
        if($result->num_rows < 0){
            return "none";
        }
        $password = $result->fetch_assoc();
        $statement->close();
        $conn->close();
        return $password["Member_Password"];
    } 

    public static function Check_Member_Exists_By_Email($email){
        $conn = Config :: Db_Connect();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $statement = $conn->prepare("SELECT Member_Password From Gym_Member Where Email = ?");
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
    public static function Get_Member_ID_By_Email_Passsword($email,$password){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Member_ID from Gym_Member Where Email = ? AND Member_Password = ?");
        $statement->bind_param("ss",$email,$password);
        $statement->execute();
        $result = $statement->get_result();
        $UserID = $result->fetch_assoc();
        $statement->close();
        $conn->close();
        return $UserID["Member_ID"];
    }
    public static function Get_Trainer_By_Member_ID($id){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("SELECT Trainer_ID from Gym_Member Where Member_ID = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $result = $statement->get_result();
        
        if ($result->num_rows < 0){
            return "none";
        }
        $TrainerID = $result->fetch_assoc();
        $statement->close();
        $conn->close();
        return $TrainerID["Trainer_ID"];
    }
    public static function Set_Members_Trainer_By_ID($memberID, $trainerID){
        $conn = Config :: Db_Connect();
        $statement = $conn->prepare("UPDATE Gym_Member SET Trainer_ID = ? WHERE Member_ID = ?");
        $statement->bind_param("ii",$trainerID,$memberID);
        $statement->execute();
        $statement->close();
        $conn->close();
    }
}
?>