<?php
include('../MemberModel.php');

class Login{

    public static function Login_Member(){

        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        if (Gym_Member :: Check_Member_Exists_By_Email() == true)
        {
            if ($password == Gym_Member :: Get_Password_By_Email($email))
            {
                $_SESSION["UserID"] = Gym_Member :: Get_Member_ID_By_Email_Passsword($email,$password);
                $_SESSION["Login-State"] = true;
                $_SESSION["user-type"] = "Member";
                Login_Success();
            }
        }
        //Else if for Login via Trainer
    }
    
    public static function Login_Success(){
        header("location: Views/home.php");
    }
}
?>