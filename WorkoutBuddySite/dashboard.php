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
               	Welcome, <strong>User</strong> <span class="textSmall">(<a href="index.php">Sign out</a>)</span>
        </div>
        <h1>Workout Buddy</h1>
        <ul id="barNav">
            <li><a class="current" href="#">Dashboard</a></li>
            <li><a href="#">Progress</a></li>
            <li><a href="#">Preferences</a></li>
        </ul>
        <div class="content">
            <table id="dashboard">
            	<tr>
                	<td id="leftCol">
                    	<img src="images/peter.jpg"><br />
                        <h3>Friends</h3>
                    </td>
                    <td>
                    	<table id="nameHeader">
                        	<tr>
                            	<td><h2 id="userName">Peter Anteater</h2></td>
                                <td width="1px"><div class="healthBar"></div></td>
                            </tr>
                        </table>
                        <h3>Upcoming Events</h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>