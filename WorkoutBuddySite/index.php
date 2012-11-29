<!DOCTYPE HTML>
<html>
<head>
    <title>Home - Workout Buddy</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <div class="main-container">
        <div id="barUser">
        	<form id="frmLogin" action="dashboard.php" method="POST">
            	<label for="txtUsername">Username:</label>
                <input type="text" name="txtUsername" />
                <label for="txtPassword">Password:</label>
                <input type="password" name="txtPassword" />
                <input type="submit" class="button small" value="Login">
            </form>
        </div>
        <h1>Workout Buddy</h1>
        <ul id="barNav">
            <li><a class="current" href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
        <div class="content">
            <p>Welcome to Workout Buddy! Workout Buddy helps connect you with exercise partners to help motivate you.</p>
            <a href="register.php" class="button large">Register for Free</a>
        </div>
    </div>
</body>
</html>