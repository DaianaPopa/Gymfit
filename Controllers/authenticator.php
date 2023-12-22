<?php

class Authenticator{

    public static function Validate(){
        if ($_SESSION["login-state"] == false){
            header("location: ../index.php");
        }
    }

    public static function Load_Header(){
        if ($_SESSION["user-type"] == "Member"){
            include("../includes/header.php");
        }
        if ($_SESSION["user-type"] == "Trainer"){
            include("../includes/trainerHeader.php");
        }
    }
}

?>