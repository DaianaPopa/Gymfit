<!DOCTYPE html>
<html lang="en">
<head>
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
            <form action="" class="form">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" name="username">
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
                <form action="" class="form" id="register-form">
                    <p>Register As:</p>
                    <div id="reg-toggle">
                        <label class="slider"><input type="checkbox" name="member" id="member">Member</label>
                        <label class="slider"><input type="checkbox" name="trainer" id="trainer">Trainer</label>
                    </div>
                    <div>
                        <label for="username">Username:</label>
                        <input type="text" name="username">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="text" name="email">
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="text" name="password">
                    </div>
                    <div>
                        <button type="submit" class="button">Register</button>
                    </div>
                </form>
            </div>
        </div>        
    </div>
    <footer>
        <h3>Copyright 2023</h3>
    </footer>
</body>
</html>