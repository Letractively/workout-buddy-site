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
                        <p>Eat a banana within 60 minutes of finishing your workout. <a class="textSmall" href="#">Learn More...</a></p>
                        <h3>Upcoming Events</h3>
                        <table class="activityTable">
                        	<tr>
                            	<td width="69%"><a href="#">Oski</a> is hosting a soccer match</td>
                                <td><span class="textSmall">In 4 days</span></td>
                                <td align="center"><input type="submit" class="button small" value="join" /></td>
                            </tr>
                            <tr>
                            	<td>Weekly jog with <a href="#">Joe Bruin</a></td>
                                <td><span class="textSmall">In 6 days</span></td>
                                <td align="center"><a class="textSmall" href="#">Cancel Event</a></td>
                            </tr>
                        </table>
                        <h3>Your Recent Activity</h3>
                        <table class="activityTable">
                        	<tr>
                            	<td width="69%">You jogged with <a href="#">Joe Bruin</a></td>
                                <td><span class="textSmall">Yesterday</span></td>
                                <td><span class="positive">+30</span></td>
                            </tr>
                            <tr>
                            	<td>You played soccer with <a href="#">Triton</a></td>
                                <td><span class="textSmall">2 days ago</span></td>
                                <td><span class="positive">+15</span></td>
                            </tr>
                            <tr>
                            	<td>You went to the gym by yourself</td>
                                <td><span class="textSmall">4 days ago</span></td>
                                <td><span class="positive">+2</span></td>
                            </tr>
                            <tr>
                            	<td>You haven't exercised in 7 days!</td>
                                <td><span class="textSmall">5 days ago</span></td>
                                <td><span class="negative">-10</span></td>
                            </tr>
                            <tr>
                            	<td colspan="3"><a href="#" class="textSmall">View More...</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>