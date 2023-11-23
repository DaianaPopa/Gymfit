<?php
class Gym_Member{
    private static $DBHostname = "gymfit.mysql.database.azure.com";
    private static $DBUsername = "Group9";
    private static $DBPassword = "Gr9!gotime";

    public static function Create_Member($Firstname,$Surname,$Email,$DOB,$Height,$Weight ){
        //THis function creates a new member call it with Gym_Member :: Create_Member
        $conn = new mysql($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO MEMBER(Firstname,Surname,Email,DOB,Height,Weight)
        Values($Firstname,$Surname,$Email,$DOB,$Height,$Weigt)";
        $conn->query($sql);
    }

    public static function Get_Password_By_Email($Email){
        // Get a member by email
        $conn = new mysql($DBHostname,$DBUsername,$DBPassword);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Member_Password from Gym_Member Where Email = '$Email'";
        $result = $conn->query($sql);
        if($result->num_rows < 0){
            return "NO";
        }
        return $result;
    }
}
?>