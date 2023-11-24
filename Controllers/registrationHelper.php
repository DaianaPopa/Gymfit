<?php
include('../MemberModel.php');
session_start();

Class Register
{
    public static function Add_Member()
    {
        $newEmail = $_POST["email"];
        $newPassword = $_POST["password"];
        if (Gym_Member :: Check_Member_Exists_By_Email($newEmail) == true)
        {
            Gym_Member :: Error_Report_Exiting_Member();
        }
        else
        {
            Gym_Member :: Create_Member();
        }
    }
    public static function Add_Trainer()
    {
        //Josh Will Write Good Code Here
    }

    private function Error_Report_Exiting_Member_Or_Trainer()
    {
        //Code stuff for error message
    }


}

?>
