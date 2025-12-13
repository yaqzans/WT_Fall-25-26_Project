<!DOCTYPE html>
<html>
<head>
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

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f5fb;
}
section{
    max-width: 800px;
    margin: auto;
    padding: 20px;
}
#btn {
    background: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
}
header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 30px;
    background: #7b6cf6;
    color: white;
}
#box {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
#logout {
    background: white;
    border: none;
    padding: 9px 18px;
    border-radius: 6px;
    cursor: pointer;
    position: absolute;
    right: 30px;
    font-size: 16px;
}

#surveyItem {
    background: #f7f7ff;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 10px;
}
#meta {
    color: gray;
    font-size: 13px;
}
footer {
    text-align: center;
    padding: 10px;
    background: white;
    border-top: 1px solid #ddd;
    position: fixed;
    bottom: 0px;
    width: 98.7%;
    font-size: 12px;
}
#footer a {
    color: #5b4df5;
}

#btncol{
    background: #7b6cf6;
    color: white;
    cursor : pointer;
}
</body>
</html>
