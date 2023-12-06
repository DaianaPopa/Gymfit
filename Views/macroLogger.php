<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Gymfit :: Macros</title>
    <link
      rel="stylesheet"
      href="../CSS/homepage.css"
    />
</head>
<body>
    <div id="back-image"></div>
    <h1 class="title">Track a macro</h1>
    <div class="sep-bar"></div>
    <a href="#" id="new-goal">Log Macro▼</a>
            <div class="top-bar">
                <span class="divider-full"></span>
            </div>
            <form method="POST" class="form">
                <div>
                    <label for="calories">Calories:</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="protein">Protein:</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <label for="calories">Carbs:</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="protein">Fat:</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <button type="submit" class="button">Log</button>
                </div>
                <div class="sep-bar"></div>
            </form>
    </div>
    
<?php
include("../Controllers/footer.php");
?>
</body>
</html>
