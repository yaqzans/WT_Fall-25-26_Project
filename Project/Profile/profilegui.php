<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="profilegui.css">
<title>User Profile</title>
</head>
<body>
<header> 
<button id = "btn">← Back </button>
<h2>NeedSurveyResponses</h2>
<button id = "logout">Logout</button>
</header>
<main>
<section>
<div id= "box">
    <h3>My Profile</h3>
    <p>User ID: <b id = "uid">XYZ</b><span style="margin-left: 15px;">Credits: <b>42</b></p>
    Name:<br>
    <input type="text" value="Student"><br><br>
    Email:<br>
    <input type="text" value="student@gmail.com"><br><br>
    <button id ="btncol">Update Profile</button>
    <button style="background:red; color:white; cursor:pointer">Delete Account</button>
</div>

<div id= "box">
    <h3>Change Password</h3>
    New Password:<br>
    <input type="password"><br><br>
    Confirm Password:<br>
    <input type="password"><br><br>
    <button id ="btncol">Change Password</button>
</div>

<div id = "box"> 
<h3>My Surveys</h3>
<div id="surveyItem">
<b>Research Topic Selection Poll</b><br>
<span id="meta">Responses: 3 / 10</span>
</div>
<div id="surveyItem">
<b>Learning Habits Survey</b><br>
<span id="meta">Responses: 10 / 10 (Closed)</span>
</div>
</section>
<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
