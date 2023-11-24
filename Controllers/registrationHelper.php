<?php
include('../MemberModel.php');
session_start();

Class Register
{
    public static function Add_Member()
    {
        $newEmail = $_POST["email"];
        $newPassword = $_POST["password"];
        if (Check_Member_Exists_By_Email($newEmail) == true)
        {
            Error_Report_Exiting_Member();
        }
    }

    private function Error_Report_Exiting_Member()
    {
        //Code stuff for error message
    }
}

?>
