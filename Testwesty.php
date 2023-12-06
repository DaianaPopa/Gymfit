<?php
include("Models/MemberModel.php");
echo "Welcome to testy westy";

$pass = Gym_Member :: Get_Password_By_Email('bombadil@gmail.com');
echo $pass;
?>