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
                <li><a class="current" href="preferences.php">About You</a></li>
                <li><a href="preferences-location.php">Location</a></li>
                <li><a href="preferences-exercise.php">Exercise</a></li>
       		</ul>
            <div class="subcontent">
                <p>Your information helps us customize your experience with Workout Buddy. All fields, except your name, are optional.</p>
                <div class="inputGroup">                	
                    <label for="txtName">Full Name:</label>                    
                    <input type="text" name="txtName" value="Peter Anteater" />
                </div>
                <div class="inputGroup">
                    <label for="txtAge">Age:</label>                    
                    <input type="text" name="txtAge" value="21" />
                </div>
                <div class="inputGroup">
                    <label>Gender:</label><br />
                    <input type="radio" id="chkMale" name="gender" checked="checked" /><label for="chkMale">Male</label><br />
                    <input type="radio" id="chkFemale" name="gender" /><label for="chkFemale">Female</label><br />
                    <input type="radio" id="chkDecline" name="gender" /><label for="chkDecline">Decline to state</label>
                </div>
                <div class="inputGroup">
                    <label>Picture:</label><br />
                    <img src="images/peter.jpg"><br /><br />
                    <label>Upload different picture:</label><br />
                    <input type="file" />
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