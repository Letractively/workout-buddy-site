<!DOCTYPE HTML>
<html>
<head>
    <title>Progress - Workout Buddy</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/progress.css">
</head>
<body>
    <div class="main-container">
    	<div id="barUser">
               	Welcome, <strong>Peter</strong> <span class="textSmall">(<a href="index.php">Sign out</a>)</span>
        </div>
        <h1>Workout Buddy</h1>
        <ul id="barNav">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a class="current" href="progress.php">Progress</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="preferences.php">Preferences</a></li>
            <li><a href="rewards.php">Rewards</a></li>
        </ul>
        <div class="content">
            <p align="right" style="padding-right:12px"><a href="#" class="button medium">Add New Activity</a>
            <h4>Your Current Fitness Level</h4>
            <div class="healthBar huge"><div class="healthBar-amount" style="width:80%"></div></div>
            <h4>Your Area's Average Fitness Level</h4>
            <div class="healthBar huge"><div class="healthBar-amount" style="width:70%"></div></div>
            <h4>Your Fitness Level Over Time</h4>
            <table id="chart">
            	<tr>
                	<td><div class="entry" style="height:80%">&nbsp;</div></td>
                    <td><div class="entry" style="height:70%">&nbsp;</div></td>
                    <td><div class="entry" style="height:72%">&nbsp;</div></td>
                    <td><div class="entry" style="height:74%">&nbsp;</div></td>
                    <td><div class="entry" style="height:70%">&nbsp;</div></td>
                    <td><div class="entry" style="height:65%">&nbsp;</div></td>
                    <td><div class="entry" style="height:60%">&nbsp;</div></td>
                    <td><div class="entry" style="height:50%">&nbsp;</div></td>
                    <td><div class="entry" style="height:45%">&nbsp;</div></td>
                    <td><div class="entry" style="height:60%">&nbsp;</div></td>
                    <td><div class="entry" style="height:65%">&nbsp;</div></td>
                    <td><div class="entry" style="height:65%">&nbsp;</div></td>
                    <td><div class="entry" style="height:60%">&nbsp;</div></td>
                    <td><div class="entry" style="height:75%">&nbsp;</div></td>
                    <td><div class="entry" style="height:85%">&nbsp;</div></td>
                    <td><div class="entry" style="height:80%">&nbsp;</div></td>
                </tr>
            </table>
            <h4>Your Health</h4>
            
        </div>
    </div>
</body>
</html>