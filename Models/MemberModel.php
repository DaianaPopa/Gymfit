<?php
class Gym_Member{
    private static $DBHostname = "gymfit.mysql.database.azure.com";
    private static $DBUsername = "Group9";
    private static $DBPassword = "Gr9!gotime";

    public static function Create_Member($firstname,$surname,$email,$DOB,$height,$weight,$password ){
        //THis function creates a new member call it with Gym_Member :: Create_Member
        $conn = new mysql($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO MEMBER(Firstname,Surname,Email,DOB,Height,Weight)
        Values($firstname,$surname,$email,$DOB,$height,$weight)";
        $conn->query($sql);
    }

    public static function Get_Password_By_Email($email){
        // Get a member by email
        $conn = new mysql($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Member_Password from Gym_Member Where Email = '$email'";
        $result = $conn->query($sql);
        if($result->num_rows < 0){
            return "none";
        }
        $password = $result->fetch_assoc();
        return $password["Member_Password"];
    }

    public static function Check_Member_Exists_By_Email($Email){
        $conn = new mysql($DBHostname,$DBUsername,$DBPassword);
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
        $conn = new mysql($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Member_ID from Gym_Member Where Email = '$email' AND Where Member_Password = '$password'";
        $result = $conn->query($sql);
        return $UserID["Member_ID"];
    }


}
?>