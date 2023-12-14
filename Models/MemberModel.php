<?php
class Gym_Member{
    
    public static function Create_Member($email,$password, $firstname, $surname){
        //THis function creates a new member call it with Gym_Member :: Create_Member
        $conn = Config :: Db_Connect();
        $sql = "INSERT INTO gym_member(Email, Member_Password, Firstname, Surname)Values('$email', '$password', '$firstname', '$surname')";
        $conn->query($sql);
    }

    public static function Get_Password_By_Email($email){
        // Get a member by email
        $conn = Config :: Db_Connect();
        $sql = "SELECT Member_Password from Gym_Member Where Email = '$email'";
        $result = $conn->query($sql);
        if($result->num_rows < 0){
            return "none";
        }
        $password = $result->fetch_assoc();
        return $password["Member_Password"];
    } 

    public static function Check_Member_Exists_By_Email($email){
        $conn = Config :: Db_Connect();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Member_Password From Gym_Member Where Email = '$email'";
        $result = $conn->query($sql);
        
        if($result->num_rows < 0){
            return false;
        }
        else{
            return true;
        }
    }

    public static function Get_Member_ID_By_Email_Passsword($email,$password){
        $conn = Config :: Db_Connect();
        $sql = "SELECT Member_ID from Gym_Member Where Email = '$email' AND Member_Password = '$password'";
        
        $result = $conn->query($sql);
        return $UserID["Member_ID"];
    }
}
?>