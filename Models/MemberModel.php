<?php
class Gym_Member{
    public static function Create_Member($firstname,$surname,$email,$DOB,$height,$weight,$password ){
        //THis function creates a new member call it with Gym_Member :: Create_Member
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName - "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO MEMBER(Firstname,Surname,Email,DOB,Height,Weight)
        Values($firstname,$surname,$email,$DOB,$height,$weight)";
        $conn->query($sql);
    }

    public static function Get_Password_By_Email($email){
        // Get a member by email
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName = "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword,$DBName);
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
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName - "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword);
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
        $DBHostname = "gymfit.mysql.database.azure.com";
        $DBUsername = "Group9";
        $DBPassword = "Gr9!gotime";
        $DBName - "gymfit";
        $conn = new mysqli($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Member_ID from Gym_Member Where Email = '$email' AND Where Member_Password = '$password'";


    }


}
?>