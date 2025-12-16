<!DOCTYPE html>
<html>
<head>
<title>Admin Views User Profile</title>
</head>

<body>
<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>

<main>
<section>

<div id="box">
<h3>User Profile</h3>

<p><b>User ID:</b> <span id = "id">XYZ</span></p>
<p><b>Name:</b> Student</p>
<p><b>Email:</b> student@gmail.com</p>
<p><b>Current Credits:</b> <span id="credits"><b>42</b></span></p>

<button id="btncol">Add Credits</button>
<button id="btncol">Remove Credits</button>
<button style="background:red; color:white; cursor:pointer;">Delete User</button>
</div>

<div id="box">
<h3>Survey History</h3>

<div id="surveyItem">
<b>Research Topic Selection Poll</b><br>
<span id="meta">Status: Active</span><br>
<span id="meta">Responses: 3 / 10</span>
</div>

<div id="surveyItem">
<b>Learning Habits Survey</b><br>
<span id="meta">Status: Closed</span><br>
<span id="meta">Responses: 10 / 10</span>
</div>
</div>

</section>
</main>

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

header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 30px;
    background: #7b6cf6;
    color: white;
}

#btn {
    background: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
}

#box {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}

#credits {
    color: #7b6cf6;
}

#btncol {
    background: #7b6cf6;
    color: white;
    cursor: pointer;
    padding: 6px 12px;
    border: none;
    border-radius: 6px;
    margin-right: 10px;
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
    padding: 15px;
    background: white;
    border-top: 1px solid #ddd;
    position: fixed;
    bottom: 0px;
    width: 98.3%;
    font-size: 12px;
}

footer a {
    color: #5b4df5;
}
</style>

</body>
</html>
