<!DOCTYPE HTML>
<html>
<head>
    <title>Preferences - Workout Buddy</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/preferences.css">
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
            <li><a class="current" href="preferences.php">Preferences</a></li>
            <li><a href="rewards.php">Rewards</a></li>
        </ul>
        <div class="content">
        	<ul id="barSubmenu">
                <li><a href="preferences.php">About You</a></li>
                <li><a href="preferences-location.php">Location</a></li>
                <li><a class="current" href="preferences-exercise.php">Exercise</a></li>
       		</ul>
            <div class="subcontent">
                <p>Your exercise preferrences help match you up with people with similar interests.</p>
                <div class="inputGroup">                	
                    <label>Preferred Types of Exercise:</label><br />
                    <input type="checkbox" id="chkTSports" checked="checked" /><label for="chkTSports">Team Sports</label><br />
                    <input type="checkbox" id="chkISports" /><label for="chkISports">Individual Sports</label><br />
                    <input type="checkbox" id="chkGym" checked="checked" /><label for="chkGym">Gym</label><br />
                    <input type="checkbox" id="chkWalking" /><label for="chkWalking">Walking</label><br />
                    <input type="checkbox" id="chkRunning" checked="checked" /><label for="chkRunning">Running</label><br />
                </div>
                <div class="inputGroup">                	
                    <label>Preferred Times to Exercise:</label><br />
                    <input type="checkbox" id="chkMorning" checked="checked" /><label for="chkMorning">Morning</label><br />
                    <input type="checkbox" id="chkMidDay" /><label for="chkMidDay">Mid Day</label><br />
                    <input type="checkbox" id="chkEvening" checked="checked" /><label for="chkEvening">Evening</label>
                </div>
                <div class="inputGroup">
                    <p></p>
                    <a class="button medium" href="#">Save Changes</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>