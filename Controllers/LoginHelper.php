<?php
include('../MemberModel.php');
session_start();

class Login{

    public static function Login_Member(){

        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        if (Check_Member_Exists_By_Email() == true)
        {
            if ($password == Get_Password_By_Email($email))
            {
                $_SESSION["UserID"] = Get_Member_ID_By_Email_Passsword($email,$password);
                $_SESSION["Login-State"] = true;
                Login_Success();
            }
        }
    }
    
    public static function Login_Success(){
        header("location: Views/home.php");
    }
}
?>