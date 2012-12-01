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
            <p align="right" style="padding-right:12px"><a href="under-construction.php" class="button medium">Add New Activity</a>
            <h4>Your Current Fitness Level</h4>
            <div class="healthBar huge"><div class="healthBar-amount" style="width:80%"></div></div>
            <h4>Your Area's Average Fitness Level</h4>
            <div class="healthBar huge"><div class="healthBar-amount" style="width:70%"></div></div>
            <h4>Your Fitness Level Over Time</h4>
            <table id="chart">
            	<tr>
                	<td><div class="entry" style="height:250px">&nbsp;</div></td>
                    <td><div class="entry" style="height:265px">&nbsp;</div></td>
                    <td><div class="entry" style="height:275px">&nbsp;</div></td>
                    <td><div class="entry" style="height:255px">&nbsp;</div></td>
                    <td><div class="entry" style="height:230px">&nbsp;</div></td>
                    <td><div class="entry" style="height:205px">&nbsp;</div></td>
                    <td><div class="entry" style="height:165px">&nbsp;</div></td>
                    <td><div class="entry" style="height:135px">&nbsp;</div></td>
                    <td><div class="entry" style="height:120px">&nbsp;</div></td>
                    <td><div class="entry" style="height:130px">&nbsp;</div></td>
                    <td><div class="entry" style="height:135px">&nbsp;</div></td>
                    <td><div class="entry" style="height:140px">&nbsp;</div></td>
                    <td><div class="entry" style="height:160px">&nbsp;</div></td>
                    <td><div class="entry" style="height:185px">&nbsp;</div></td>
                    <td><div class="entry" style="height:200px">&nbsp;</div></td>
                    <td><div class="entry" style="height:220px">&nbsp;</div></td>
                </tr>
            </table>
            <h4>Your Health</h4>
            <p>At this fitness level, you will extend your life by <span class="lifeYears">10</span> years</p>
        </div>
    </div>
</body>
</html>