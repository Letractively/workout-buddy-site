<!DOCTYPE HTML>
<html>
<head>
    <title>Dashboard - Workout Buddy</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/dashboard.css">
</head>
<body>
    <div class="main-container">
    	<div id="barUser">
               	Welcome, <strong>Peter</strong> <span class="textSmall">(<a href="index.php">Sign out</a>)</span>
        </div>
        <h1>Workout Buddy</h1>
        <ul id="barNav">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="progress.php">Progress</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="preferences.php">Preferences</a></li>
            <li><a href="rewards.php">Rewards</a></li>
        </ul>
        <div class="content">
            <h3>Account Created</h3>
            <p>Thank you for registering! To get the most out of your account we recommend you first setup your preferences.</p>
            <p align="center"><a href="preferences.php" class="button large">Set up Preferences</a></p>
            <p align="center"><a href="dashboard-empty.php" class="textSmall">Skip for now</a>
            </p>
        </div>
    </div>
</body>
</html>