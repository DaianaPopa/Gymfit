<?php
include('../MemberModel.php');
include("../TrainerModel.php");

class Login{

    public static function Login_Query()
    {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        if (Gym_Member :: Check_Member_Exists_By_Email($email) == true)
        {
            Login_Member($email, $password);
        }
        if (Gym_Trainer :: Check_Trainer_Exists_By_Email($email) == true)
        {
            Login_Trainer($email, $password);
        }
        //else
        //Provide Error Feedback for unrecognised email
    }

    public static function Login_Member($email, $password)
    {
        if ($password == Gym_Member :: Get_Password_By_Email($email))
        {
            $_SESSION["UserID"] = Gym_Member :: Get_Member_ID_By_Email_Passsword($email,$password);
            $_SESSION["Login-State"] = true;
            $_SESSION["user-type"] = "Member";
            Login_Success();
        }
        //else
        //Provide Error Feedback for unrecognised password

    }

    public static function Login_Trainer($email, $password)
    {
        if ($password == Gym_Trainer :: Get_Password_By_Email($email))
        {
            $_SESSION["UserID"] = Gym_Trainer :: Get_Trainer_ID_By_Email_Passsword($email,$password);
            $_SESSION["Login-State"] = true;
            $_SESSION["user-type"] = "Trainer";
            Login_Success();
        }
        //else
        //Provide Error Feedback for unrecognised password
    }

    public static function Login_Success()
    {
        header("location: Views/home.php");
    }
}
?>