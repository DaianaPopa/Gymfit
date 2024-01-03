<?php
Class Register
{
    public static function Register_Query()
    {
        $emailReg = $_POST["emailReg"];
        $passwordReg = $_POST["passwordReg"];
        $firstname = $_POST["firstnameReg"];
        $surname = $_POST["surnameReg"];
        //Checking for Member Checkbox Seleted
        if(isset($_POST["memberReg"]))
        {
            if( Gym_Member :: Check_Member_Exists_By_Email($emailReg) == true )
            {
                //Report Error Message for account already existing
            }
            Register :: Register_Member($emailReg, $passwordReg, $firstname, $surname);
        }
        //Checking for Trainer Checkbox Seleted
        if(isset($_POST["trainerReg"]))
        {
            if( Gym_Trainer :: Check_Trainer_Exists_By_Email($emailReg) == true )
            {
                //Report Error Message for account already existing
            }
            Register :: Register_Trainer($emailReg, $passwordReg, $firstname, $surname);
        }
    }

    //Both automatically sign in using the newly created account
    public static function Register_Member($emailReg, $passwordReg, $firstname, $surname)
    {
        Gym_Member :: Create_Member($emailReg, $passwordReg, $firstname, $surname);
        Macro_Goals :: Create_Goal(Gym_Member :: Get_Member_ID_By_Email_Passsword($emailReg,$passwordReg),0,0,0,0);
        Login :: Login_Member($emailReg, $passwordReg);
    }
    public static function Register_Trainer($emailReg, $passwordReg, $firstname, $surname)
    {
        Gym_Trainer :: Create_Trainer($emailReg, $passwordReg, $firstname, $surname);
        Login :: Login_Trainer($emailReg, $passwordReg);
    }
}
?>
