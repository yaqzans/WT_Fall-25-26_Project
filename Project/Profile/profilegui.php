<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>
</head>
<body>
<header> 
<button id = "btn">← Back </button>
<h2>NeedSurveyResponses</h2>
</header>
<main>
<div id = "box">
<h3>My Profile</h3>
<p><b>Name:</b> Student</p>
<p><b>Email:</b> student@gmail.com</p>
<p id="credits">Credits: <b>42</b></p>
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

<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">Mail</a>
</footer>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f5fb;
}
#btn {
    background: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
}
#header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 30px;
    background: linear-gradient(to right, #7b6cf6, #8f7df7);
    color: white;
}
#box {
    background-color: white;
    padding: 20px;
    margin: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
#surveyItem {
    margin-top: 10px;
    padding: 10px;
    border-bottom: 1px solid #eee;
}
#meta {
    color: gray;
    font-size: 14px;
}
footer {
    text-align: center;
    padding: 15px;
    background-color: #f4f5fb;
    margin-top: 20px;
    postion : relative;
    bottom : 0;
}


</body>
</html>
