<!DOCTYPE HTML>
<html>
<head>
    <title>Register - Workout Buddy</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/register.css">
</head>
<body>
    <div class="main-container">
        <div id="barUser">
        	<label for="txtUsername">Username:</label>
            <input type="text" name="txtUsername" />
            <label for="txtPassword">Password:</label>
            <input type="password" name="txtPassword" />
            <a href="dashboard.php" class="button small">Login</a><br />
            <a href="under-construction.php" class="textSmall">Forgot Password?</a>
        </div>
        <h1>Workout Buddy</h1>
        <ul id="barNav">
            <li><a href="index.php">Home</a></li>
            <li><a class="current" href="register.php">Register</a></li>
        </ul>
        <div class="content">
            <h2>Register</h2>
                <div id="frmRegistration">
                <div class="inputGroup">
                    <label for="txtName">Full Name:</label>                    
                    <input type="text" name="txtName" />
                    <label class="small">Helps your friends find you</label>
                </div>
                <div class="inputGroup">
                    <label for="txtEmail">Email <span class="textSmall">(optional)</span>:</label>                    
                    <input type="text" name="txtEmail" />
                    <label class="small">To send notifications, never spam</label>
                </div>
                <div class="inputGroup">
                    <label for="txtUsername">Username:</label>                    
                    <input type="text" name="txtUsername" />
                    <label class="small">Used for logging in</label>
                </div>
                <div class="inputGroup">
                    <label for="txtPassword">Password:</label>                    
                    <input type="password" name="txtPassword" />
                    <label class="small">6 character minimum</label>
                </div>
                <div class="inputGroup">
                    <label for="txtPassword2">Confirm Password :</label>
                    <input type="password" name="txtPassword2" />
                    <label class="small">Make sure you got it right</label>
                </div>
                <div class="inputGroup">
                    <p></p>
                    <a href="dashboard-empty.php" class="button large">Register</a>
                    <a href="index.php">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>