<?php 
session_start();
include "LoginHelper.php";
include "registrationHelper.php";

if (isset($_POST["email"]) && isset($_POST["password"])){
    Login :: Login_Query();
}
if (isset($_POST["emailReg"]) && isset($_POST["passwordReg"])){
    Register :: Register_Query();
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/homepage.css">
    <script src="JS/jquery.js"></script>
    <script src="JS/login-register.js"></script>
    <title>GymFit :: Home</title>
</head>
<body>
    <div id="back-image"></div>
    <header>
        <h2 class="heading-title">Welcome To Gymfit</h2>
        <div class="divider-bar"></div>
    </header>
    <div id="hidemenu">
        <div class="panel" id="home">
            <a href="#login" class="button menu-link">Login</a>
            <a href="#register" class="button menu-link">Register</a>
        </div>
    </div>
    <div class="panel" id="login">
        <div class="panel-content">
            <div class="top-bar">
                <a href="#home" class="return-btn">Close</a>
                <h2>Login</h2>
                <span class="divider-full"></span>
            </div>
            <form method="POST" class="form">
                <div>
                    <label for="email">Email:</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <button type="submit" class="button">Login</button>
                </div>
            </form>
        </div>        
    </div>
    <div class="panel" id="register">
        <div class="panel-content">
            <div class="top-bar">
                <a href="#home" class="return-btn">Close</a>
                <h2>Register</h2>
                <span class="divider-full"></span>
                <form method="POST" class="form" id="register-form">
                    <p>Register As:</p>
                    <div id="reg-toggle">
                        <label class="slider"><input type="checkbox" name="memberReg" id="member">Member</label>
                        <label class="slider"><input type="checkbox" name="trainerReg" id="trainer">Trainer</label>
                    </div>
                    <div>
                        <label for="emailReg">Email:</label>
                        <input type="text" name="emailReg">
                    </div>
                    <div>
                        <label for="passwordReg">Password:</label>
                        <input type="text" name="passwordReg">
                    </div>
                    <div>
                        <button type="submit" class="button">Register</button>
                    </div>
                </form>
            </div>
        </div>        
    </div>
    <div>
    </div>
</body>
</html>
