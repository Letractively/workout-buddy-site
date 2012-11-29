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
        	<form id="frmLogin">
            	<label for="txtUsername">Username:</label>
                <input type="text" name="txtUsername" />
                <label for="txtPassword">Password:</label>
                <input type="password" name="txtPassword" />
                <input type="submit" class="button small" value="Login">
            </form>
        </div>
        <h1>Workout Buddy</h1>
        <ul id="barNav">
            <li><a href="index.php">Home</a></li>
            <li><a class="current" href="register.php">Register</a></li>
        </ul>
        <div class="content">
            <h2>Register</h2>
            <form id="frmRegister" action="dashboard.php" method="POST">
            	<div class="inputGroup">
                    <label for="txtName">Your Name:</label>
                    <input type="text" name="txtName" />
                </div>
                <div class="inputGroup">
                    <label for="txtUsername">Username:</label>
                    <input type="text" name="txtUsername" />
                </div>
                <div class="inputGroup">
                    <label for="txtPassword">Password:</label>
                    <input type="password" name="txtPassword" />
                </div>
                <div class="inputGroup">
                    <label for="txtPassword2">Confirm Password:</label>
                    <input type="password" name="txtPassword2" />
                </div>
                <div class="inputGroup">
                	<input type="submit" class="button large" value="Register"> <a href="index.php">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>