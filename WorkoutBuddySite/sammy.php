<!DOCTYPE HTML>
<html>
<head>
    <title>Gunrock - Workout Buddy</title>
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
            <table id="dashboard">
            	<tr>
                	<td id="leftCol">
                    	<img src="images/sammy.jpg"><br />
                        <h3 id="friendsHeader">Friends</h3>
                        <div class="section">
                            <ul id="friends">
                                <li>
                                    <a class="friendLabel" href="gunrock.php">Gunrock</a>
                                    <div class="healthBar small"><div class="healthBar-amount" style="width:10%;background-color:red;"></div></div>
                                </li>
                                <li>
                                    <a class="friendLabel" href="under-construction.php">Oski</a>
                                    <div class="healthBar small"><div class="healthBar-amount" style="width:90%"></div></div>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td>
                    	<table id="nameHeader">
                        	<tr>
                            	<td><h2 id="userName">Sammy the Slug</h2></td>
                                <td width="1px"><div class="healthBar large"><div class="healthBar-amount" style="width:88%"></div></div></td>
                            </tr>
                        </table>           
                        <div class="section" style="text-align:right">
                        	<br />
                            <a href="#" class="button medium">Add as Friend</a>
                        </div>             
                        <div class="section">
                            <h3>Sammy the Slug's Recent Activity</h3>
                            <table class="activityTable">
                                <tr>
                                    <td>Sammy the Slug swam by himself</td>
                                    <td><span class="textSmall">1 days ago</span></td>
                                    <td><span class="positive">+2</span></td>
                                </tr>
                                <tr>
                                    <td>Sammy the Slug jogged with <a href="under-construction.php">Oski</a></td>
                                    <td><span class="textSmall">5 days ago</span></td>
                                    <td><span class="positive">+20</span></td>
                                </tr>
                                <tr>
                                    <td>Sammy the Slug ran a marathon with <a href="under-construction.php">Oski</a></td>
                                    <td><span class="textSmall">10 days ago</span></td>
                                    <td><span class="positive">+90</span></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><a href="#" class="textSmall">View More...</a></td>
                                </tr>
                            </table>
                         </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>