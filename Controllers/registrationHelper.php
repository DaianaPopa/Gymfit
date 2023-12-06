<?php

include ("../Models/MemberModel.php");
include ("../Models/TrainerModel.php");
Class Register
{
    public static function Register_Query()
    {
        $emailReg = $_POST["emailReg"];
        $passwordReg = $_POST["passwordReg"];
        //Checking for Member Checkbox Seleted
        if(isset($_POST["memberReg"]))
        {
            if( Gym_Member :: Check_Member_Exists_By_Email($emailReg) == true )
            {
                //Report Error Message for account already existing
            }
            Register :: Register_Member($emailReg, $passwordReg);
        }
        //Checking for Trainer Checkbox Seleted
        if(isset($_POST["trainerReg"]))
        {
            if( Gym_Trainer :: Check_Trainer_Exists_By_Email($emailReg) == true )
            {
                //Report Error Message for account already existing
            }
            Register :: Register_Trainer($emailReg, $passwordReg);
        }
    }

    //Both automatically sign in using the newly created account
    public static function Register_Member($emailReg, $passwordReg)
    {
        Gym_Member :: Create_Member($emailReg, $passwordReg);
        Login :: Login_Member($emailReg, $passwordReg);
    }
    public static function Register_Trainer($emailReg, $passwordReg)
    {
        Gym_Trainer :: Create_Trainer($emailReg, $passwordReg);
        Login :: Login_Trainer($emailReg, $passwordReg);
    }
}
?>
