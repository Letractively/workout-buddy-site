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
            <li><a class="current" href="#">Dashboard</a></li>
            <li><a href="#">Progress</a></li>
            <li><a href="#">Schedule</a></li>
            <li><a href="#">Preferences</a></li>
        </ul>
        <div class="content">
            <table id="dashboard">
            	<tr>
                	<td id="leftCol">
                    	<img src="images/peter.jpg"><br />
                        <h3 id="friendsHeader">Friends</h3>
                        <ul id="friends">
                        	<li>
                            	<a class="friendLabel" href="#">Joe Bruin</a>
                                <div class="healthBar small"><div class="healthBar-amount" style="width:70%"></div></div>
                            </li>
                            <li>
                            	<a class="friendLabel" href="#">Triton</a>
                                <div class="healthBar small"><div class="healthBar-amount" style="width:50%;background-color:gold;"></div></div>
                            </li>
                            <li>
                            	<a class="friendLabel" href="#">Oski</a>
                                <div class="healthBar small"><div class="healthBar-amount" style="width:90%"></div></div>
                            </li>
                            <li>
                            	<a class="friendLabel" href="#">Gunrock</a>
                                <div class="healthBar small"><div class="healthBar-amount" style="width:10%;background-color:red;"></div></div>
                            </li>
                        </ul>
                        <h3 id="friendsHeader">People Near You</h3>
                        <ul id="friends">
                        	<li>
                            	<a class="friendLabel" href="#">Jason</a>
                                <div class="healthBar small"><div class="healthBar-amount" style="width:88%"></div></div>
                            </li>
                            <li>
                            	<a class="friendLabel" href="#">Moses</a>
                                <div class="healthBar small"><div class="healthBar-amount" style="width:95%;"></div></div>
                            </li>
                        </ul>
                    </td>
                    <td>
                    	<table id="nameHeader">
                        	<tr>
                            	<td><h2 id="userName">Peter Anteater</h2></td>
                                <td width="1px"><div class="healthBar large"><div class="healthBar-amount" style="width:80%"></div></div></td>
                            </tr>
                        </table>
                        <h3>Today's Exercise Tip</h3>
                        <p>Eat a banana within 60 minutes of finishing your workout. <a href="#">Learn More...</a></p>
                        <h3>Upcoming Events</h3>
                        <h3>Your Recent Activity</h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>